<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class SystemUpdateController extends Controller
{
    public function index()
    {
        // Check if user is authenticated
        if (!auth()->check()) {
            return redirect()->route('admin.login');
        }

        // Check if user is superadmin
        if (auth()->user()->role !== 'superadmin') {
            abort(403, 'Unauthorized access.');
        }

        return view('admin.system-update.index');
    }

    public function update(Request $request)
    {
        // Check if user is authenticated
        if (!auth()->check()) {
            return redirect()->route('admin.login');
        }

        // Check if user is superadmin
        if (auth()->user()->role !== 'superadmin') {
            abort(403, 'Unauthorized access.');
        }

        try {
            $output = [];
            $errors = [];
            
            // Get base path
            $basePath = base_path();
            
            // Step 1: Git Pull
            $output[] = "=== Step 1: Git Pull ===";
            try {
                $gitPull = new Process(['git', 'pull', 'origin', 'main'], $basePath);
                $gitPull->setTimeout(300);
                $gitPull->run();
                
                if ($gitPull->isSuccessful()) {
                    $output[] = $gitPull->getOutput();
                } else {
                    // Try with master branch if main fails
                    $gitPullMaster = new Process(['git', 'pull', 'origin', 'master'], $basePath);
                    $gitPullMaster->setTimeout(300);
                    $gitPullMaster->run();
                    
                    if ($gitPullMaster->isSuccessful()) {
                        $output[] = $gitPullMaster->getOutput();
                    } else {
                        $errors[] = "Git Pull Error: " . $gitPullMaster->getErrorOutput();
                        $output[] = $gitPullMaster->getErrorOutput();
                    }
                }
            } catch (\Exception $e) {
                $errors[] = "Git Pull Exception: " . $e->getMessage();
                $output[] = "Error: " . $e->getMessage();
            }
            
            // Step 2: Composer Install (no dev for production)
            $output[] = "\n=== Step 2: Composer Install ===";
            try {
                // Check if composer.json exists
                if (!file_exists($basePath . '/composer.json')) {
                    $output[] = "composer.json not found, skipping composer install";
                } else {
                    $composerInstall = new Process(['composer', 'install', '--no-dev', '--optimize-autoloader', '--no-interaction'], $basePath);
                    $composerInstall->setTimeout(600);
                    $composerInstall->run();
                    
                    if ($composerInstall->isSuccessful()) {
                        $output[] = $composerInstall->getOutput();
                    } else {
                        $errors[] = "Composer Install Error: " . $composerInstall->getErrorOutput();
                        $output[] = $composerInstall->getErrorOutput();
                    }
                }
            } catch (\Exception $e) {
                $errors[] = "Composer Install Exception: " . $e->getMessage();
                $output[] = "Error: " . $e->getMessage();
            }
            
            // Step 3: Run Migrations
            $output[] = "\n=== Step 3: Database Migrations ===";
            Artisan::call('migrate', ['--force' => true]);
            $output[] = Artisan::output();
            
            // Step 4: Clear and Cache
            $output[] = "\n=== Step 4: Clear Cache ===";
            Artisan::call('cache:clear');
            $output[] = "Cache cleared: " . Artisan::output();
            
            Artisan::call('config:clear');
            $output[] = "Config cleared: " . Artisan::output();
            
            Artisan::call('route:clear');
            $output[] = "Route cleared: " . Artisan::output();
            
            Artisan::call('view:clear');
            $output[] = "View cleared: " . Artisan::output();
            
            // Step 5: Optimize
            $output[] = "\n=== Step 5: Optimize ===";
            Artisan::call('config:cache');
            $output[] = "Config cached: " . Artisan::output();
            
            Artisan::call('route:cache');
            $output[] = "Route cached: " . Artisan::output();
            
            Artisan::call('view:cache');
            $output[] = "View cached: " . Artisan::output();
            
            // Log the update
            Log::info('System Update Completed', [
                'user' => auth()->check() ? auth()->user()->name : 'Unknown',
                'user_id' => auth()->check() ? auth()->user()->id : null,
                'output' => implode("\n", $output),
                'errors' => $errors
            ]);
            
            $message = count($errors) > 0 
                ? 'Update selesai dengan beberapa error. Silakan cek log untuk detail.'
                : 'System berhasil diupdate!';
            
            return redirect()->route('admin.system-update.index')
                ->with('success', $message)
                ->with('output', implode("\n", $output))
                ->with('errors', $errors);
                
        } catch (\Exception $e) {
            Log::error('System Update Failed', [
                'user' => auth()->check() ? auth()->user()->name : 'Unknown',
                'user_id' => auth()->check() ? auth()->user()->id : null,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return redirect()->route('admin.system-update.index')
                ->with('error', 'Update gagal: ' . $e->getMessage());
        }
    }
}

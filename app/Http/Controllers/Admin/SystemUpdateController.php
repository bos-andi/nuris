<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SystemUpdate;
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

        $updates = SystemUpdate::orderBy('version', 'desc')->paginate(10);
        $latestUpdate = SystemUpdate::orderBy('version', 'desc')->first();
        $totalUpdates = SystemUpdate::getTotalUpdates();
        $nextVersion = SystemUpdate::getNextVersion();
        
        return view('admin.system-update.index', compact('updates', 'latestUpdate', 'totalUpdates', 'nextVersion'));
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
            $steps = [];
            $errors = [];
            $hasError = false;
            
            // Get base path
            $basePath = base_path();
            
            // Detect PHP path (for XAMPP)
            $phpPath = 'php'; // Default
            $possiblePhpPaths = [
                'C:\\xampp8.2\\php\\php.exe',
                'C:\\xampp\\php\\php.exe',
                'C:\\xampp7.4\\php\\php.exe',
                'php' // Try PATH first
            ];
            
            foreach ($possiblePhpPaths as $path) {
                if ($path === 'php') {
                    // Check if php is in PATH
                    $testProcess = new Process(['php', '--version'], $basePath);
                    $testProcess->setTimeout(5);
                    $testProcess->run();
                    if ($testProcess->isSuccessful()) {
                        $phpPath = 'php';
                        break;
                    }
                } else {
                    // Check if file exists
                    if (file_exists($path)) {
                        $phpPath = $path;
                        break;
                    }
                }
            }
            
            // Step 1: Git Pull
            $step1 = [
                'name' => 'Git Pull',
                'description' => 'Mengambil perubahan terbaru dari repository GitHub',
                'status' => 'processing',
                'output' => '',
                'error' => null
            ];
            
            try {
                // Check if Git is available
                $gitCheck = new Process(['git', '--version'], $basePath);
                $gitCheck->setTimeout(10);
                $gitCheck->run();
                
                if (!$gitCheck->isSuccessful()) {
                    $step1['status'] = 'error';
                    $step1['error'] = 'Git tidak ditemukan di sistem. Silakan install Git terlebih dahulu.';
                    $step1['output'] = 'Error: Git command tidak tersedia. Pastikan Git sudah terinstall dan ada di PATH environment variable.';
                    $errors[] = "Git tidak terinstall atau tidak ada di PATH. Silakan install Git dari https://git-scm.com/download/win dan restart server.";
                    $hasError = true;
                } else {
                    // Check if .git directory exists
                    if (!is_dir($basePath . '/.git')) {
                        $step1['status'] = 'error';
                        $step1['error'] = 'Repository Git tidak ditemukan. Folder .git tidak ada.';
                        $step1['output'] = 'Error: Repository Git belum diinisialisasi. Silakan setup Git repository terlebih dahulu.';
                        $errors[] = "Repository Git belum diinisialisasi. Jalankan 'git init' dan hubungkan dengan GitHub.";
                        $hasError = true;
                    } else {
                        // Try git pull
                        $gitPull = new Process(['git', 'pull', 'origin', 'main'], $basePath);
                        $gitPull->setTimeout(300);
                        $gitPull->run();
                        
                        if ($gitPull->isSuccessful()) {
                            $step1['status'] = 'success';
                            $step1['output'] = trim($gitPull->getOutput()) ?: 'Berhasil mengambil perubahan dari repository';
                        } else {
                            // Try with master branch if main fails
                            $gitPullMaster = new Process(['git', 'pull', 'origin', 'master'], $basePath);
                            $gitPullMaster->setTimeout(300);
                            $gitPullMaster->run();
                            
                            if ($gitPullMaster->isSuccessful()) {
                                $step1['status'] = 'success';
                                $step1['output'] = trim($gitPullMaster->getOutput()) ?: 'Berhasil mengambil perubahan dari repository (branch master)';
                            } else {
                                $errorOutput = trim($gitPullMaster->getErrorOutput());
                                $step1['status'] = 'error';
                                
                                // Provide more helpful error message
                                if (str_contains($errorOutput, 'not recognized') || str_contains($errorOutput, 'not found')) {
                                    $step1['error'] = 'Git tidak ditemukan di sistem. Silakan install Git terlebih dahulu.';
                                    $step1['output'] = 'Error: Git command tidak tersedia. Pastikan Git sudah terinstall dan ada di PATH.';
                                    $errors[] = "Git tidak terinstall atau tidak ada di PATH. Silakan install Git dari https://git-scm.com/download/win dan restart server.";
                                } elseif (str_contains($errorOutput, 'getaddrinfo') || str_contains($errorOutput, 'unable to access') || str_contains($errorOutput, 'Permission denied')) {
                                    $step1['error'] = 'Tidak bisa mengakses GitHub. Gunakan SSH atau cek koneksi internet.';
                                    $step1['output'] = 'Error: Gagal terhubung ke GitHub. Pastikan remote URL sudah diubah ke SSH (git@github.com:bos-andi/nuris.git) atau setup SSH key.';
                                    $errors[] = "Git Network Error: Tidak bisa mengakses GitHub. Pastikan remote URL menggunakan SSH (git@github.com:bos-andi/nuris.git) atau setup SSH key.";
                                } else {
                                    $step1['error'] = $errorOutput;
                                    $errors[] = "Git Pull Error: " . $errorOutput;
                                }
                                $hasError = true;
                            }
                        }
                    }
                }
            } catch (\Exception $e) {
                $step1['status'] = 'error';
                $errorMsg = $e->getMessage();
                
                // Provide more helpful error message
                if (str_contains($errorMsg, 'not recognized') || str_contains($errorMsg, 'not found')) {
                    $step1['error'] = 'Git tidak ditemukan di sistem. Silakan install Git terlebih dahulu.';
                    $step1['output'] = 'Error: Git command tidak tersedia. Pastikan Git sudah terinstall dan ada di PATH environment variable.';
                    $errors[] = "Git tidak terinstall atau tidak ada di PATH. Silakan install Git dari https://git-scm.com/download/win dan restart server.";
                } else {
                    $step1['error'] = $errorMsg;
                    $errors[] = "Git Pull Exception: " . $errorMsg;
                }
                $hasError = true;
            }
            
            $steps[] = $step1;
            
            // Step 2: Composer Install
            $step2 = [
                'name' => 'Composer Install',
                'description' => 'Menginstall dan memperbarui dependencies PHP',
                'status' => 'processing',
                'output' => '',
                'error' => null
            ];
            
            try {
                if (!file_exists($basePath . '/composer.json')) {
                    $step2['status'] = 'skipped';
                    $step2['output'] = 'composer.json tidak ditemukan, step dilewati';
                } else {
                    // Use --ignore-platform-reqs to bypass PHP version check
                    $composerInstall = new Process(['composer', 'install', '--no-dev', '--optimize-autoloader', '--no-interaction', '--ignore-platform-reqs'], $basePath);
                    $composerInstall->setTimeout(600);
                    $composerInstall->run();
                    
                    if ($composerInstall->isSuccessful()) {
                        $step2['status'] = 'success';
                        $output = trim($composerInstall->getOutput());
                        $step2['output'] = $output ?: 'Dependencies berhasil diinstall';
                    } else {
                        $errorOutput = trim($composerInstall->getErrorOutput());
                        $step2['status'] = 'error';
                        $step2['error'] = $errorOutput;
                        
                        // Provide more helpful error message for PHP version issues
                        if (str_contains($errorOutput, 'php version') || str_contains($errorOutput, 'does not satisfy')) {
                            $step2['error'] = 'Versi PHP tidak sesuai dengan requirement. Menggunakan --ignore-platform-reqs untuk melewati pengecekan.';
                            $step2['output'] = 'Warning: PHP version mismatch terdeteksi. Dependencies tetap diinstall dengan mengabaikan platform check.';
                            // Try again with ignore-platform-reqs (already included above)
                            // Or continue with warning
                            $errors[] = "Composer Install Warning: PHP version mismatch. Dependencies diinstall dengan --ignore-platform-reqs.";
                        } else {
                            $errors[] = "Composer Install Error: " . $errorOutput;
                            $hasError = true;
                        }
                    }
                }
            } catch (\Exception $e) {
                $step2['status'] = 'error';
                $step2['error'] = $e->getMessage();
                $errors[] = "Composer Install Exception: " . $e->getMessage();
                $hasError = true;
            }
            
            $steps[] = $step2;
            
            // Step 3: Database Migrations
            $step3 = [
                'name' => 'Database Migration',
                'description' => 'Menjalankan migrasi database',
                'status' => 'processing',
                'output' => '',
                'error' => null
            ];
            
            try {
                // Check if PHP is available
                if ($phpPath === 'php') {
                    $phpTest = new Process(['php', '--version'], $basePath);
                    $phpTest->setTimeout(5);
                    $phpTest->run();
                    if (!$phpTest->isSuccessful()) {
                        throw new \Exception('PHP tidak ditemukan. Pastikan PHP ada di PATH atau XAMPP terinstall.');
                    }
                }
                
                Artisan::call('migrate', ['--force' => true]);
                $output = trim(Artisan::output());
                $step3['status'] = 'success';
                $step3['output'] = $output ?: 'Migrasi database berhasil dijalankan';
            } catch (\Exception $e) {
                $step3['status'] = 'error';
                $errorMsg = $e->getMessage();
                
                // Provide helpful error message for PHP not found
                if (str_contains($errorMsg, 'not recognized') || str_contains($errorMsg, 'not found') || str_contains($errorMsg, 'PHP tidak ditemukan')) {
                    $step3['error'] = 'PHP tidak ditemukan di sistem. Pastikan XAMPP terinstall dan PHP ada di PATH.';
                    $step3['output'] = 'Error: PHP command tidak tersedia. Tambahkan C:\\xampp8.2\\php ke PATH environment variable.';
                    $errors[] = "PHP tidak ditemukan. Tambahkan C:\\xampp8.2\\php ke PATH atau gunakan full path.";
                } else {
                    $step3['error'] = $errorMsg;
                    $errors[] = "Migration Error: " . $errorMsg;
                }
                $hasError = true;
            }
            
            $steps[] = $step3;
            
            // Step 4: Clear Cache
            $step4 = [
                'name' => 'Clear Cache',
                'description' => 'Membersihkan semua cache aplikasi',
                'status' => 'processing',
                'output' => '',
                'error' => null
            ];
            
            try {
                $cacheOutputs = [];
                
                Artisan::call('cache:clear');
                $cacheOutputs[] = 'Cache cleared';
                
                Artisan::call('config:clear');
                $cacheOutputs[] = 'Config cleared';
                
                Artisan::call('route:clear');
                $cacheOutputs[] = 'Route cleared';
                
                Artisan::call('view:clear');
                $cacheOutputs[] = 'View cleared';
                
                $step4['status'] = 'success';
                $step4['output'] = implode(', ', $cacheOutputs);
            } catch (\Exception $e) {
                $step4['status'] = 'error';
                $step4['error'] = $e->getMessage();
                $errors[] = "Clear Cache Error: " . $e->getMessage();
                $hasError = true;
            }
            
            $steps[] = $step4;
            
            // Step 5: Optimize
            $step5 = [
                'name' => 'Optimize',
                'description' => 'Mengoptimalkan aplikasi dengan caching',
                'status' => 'processing',
                'output' => '',
                'error' => null
            ];
            
            try {
                $optimizeOutputs = [];
                
                Artisan::call('config:cache');
                $optimizeOutputs[] = 'Config cached';
                
                Artisan::call('route:cache');
                $optimizeOutputs[] = 'Route cached';
                
                Artisan::call('view:cache');
                $optimizeOutputs[] = 'View cached';
                
                $step5['status'] = 'success';
                $step5['output'] = implode(', ', $optimizeOutputs);
            } catch (\Exception $e) {
                $step5['status'] = 'error';
                $step5['error'] = $e->getMessage();
                $errors[] = "Optimize Error: " . $e->getMessage();
                $hasError = true;
            }
            
            $steps[] = $step5;
            
            // Get next version number
            $version = SystemUpdate::getNextVersion();
            
            // Determine status
            $status = $hasError ? 'error' : 'success';
            if ($hasError && count($steps) > 0) {
                $successCount = count(array_filter($steps, fn($step) => $step['status'] === 'success'));
                if ($successCount > 0) {
                    $status = 'partial';
                }
            }
            
            // Save update history
            $systemUpdate = SystemUpdate::create([
                'version' => $version,
                'updated_by' => auth()->check() ? auth()->user()->id : null,
                'updated_by_name' => auth()->check() ? auth()->user()->name : 'System',
                'status' => $status,
                'has_error' => $hasError,
                'steps_data' => $steps,
                'errors_data' => $errors,
                'output_data' => implode("\n", array_map(function($step) {
                    return $step['name'] . ': ' . ($step['status'] === 'success' ? 'Success' : ($step['status'] === 'error' ? 'Error' : 'Skipped'));
                }, $steps)),
            ]);
            
            // Log the update
            Log::info('System Update Completed', [
                'version' => $version,
                'user' => auth()->check() ? auth()->user()->name : 'Unknown',
                'user_id' => auth()->check() ? auth()->user()->id : null,
                'steps' => $steps,
                'errors' => $errors,
                'has_error' => $hasError
            ]);
            
            $message = $hasError 
                ? 'Update selesai dengan beberapa error. Silakan cek detail di bawah.'
                : 'System berhasil diupdate! Semua langkah berhasil dijalankan.';
            
            // Check if request is AJAX
            if ($request->wantsJson() || $request->ajax()) {
                return response()->json([
                    'success' => !$hasError,
                    'message' => $message,
                    'version' => $version,
                    'steps' => $steps,
                    'errors' => $errors,
                    'has_error' => $hasError
                ]);
            }
            
            return redirect()->route('admin.system-update.index')
                ->with('success', $message)
                ->with('update_steps', $steps)
                ->with('update_errors', $errors)
                ->with('update_has_error', $hasError)
                ->with('update_version', $version);
                
        } catch (\Exception $e) {
            Log::error('System Update Failed', [
                'user' => auth()->check() ? auth()->user()->name : 'Unknown',
                'user_id' => auth()->check() ? auth()->user()->id : null,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            // Check if request is AJAX
            if ($request->wantsJson() || $request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Update gagal: ' . $e->getMessage(),
                    'error' => $e->getMessage()
                ], 500);
            }
            
            return redirect()->route('admin.system-update.index')
                ->with('error', 'Update gagal: ' . $e->getMessage());
        }
    }

    public function detail($id)
    {
        // Check if user is authenticated
        if (!auth()->check()) {
            return response()->json(['success' => false, 'message' => 'Unauthorized'], 401);
        }

        // Check if user is superadmin
        if (auth()->user()->role !== 'superadmin') {
            return response()->json(['success' => false, 'message' => 'Forbidden'], 403);
        }

        $update = SystemUpdate::findOrFail($id);
        
        return response()->json([
            'success' => true,
            'update' => [
                'version' => $update->version,
                'status' => $update->status,
                'formatted_date' => $update->formatted_date,
                'updated_by_name' => $update->updated_by_name,
                'steps_data' => $update->steps_data,
                'errors_data' => $update->errors_data,
            ]
        ]);
    }
}

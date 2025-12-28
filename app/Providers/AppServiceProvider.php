<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share baseUrl to all views for absolute asset URLs (works on LAN)
        View::composer('*', function ($view) {
            $request = request();
            
            // Ambil scheme (http/https)
            $scheme = $request->getScheme();
            
            // Ambil host (bisa localhost atau IP address)
            $host = $request->getHost();
            
            // Ambil port jika ada (selain port default)
            $port = $request->getPort();
            
            // Bangun base URL
            $baseUrl = $scheme . '://' . $host;
            
            // Tambahkan port jika bukan port default (80 untuk http, 443 untuk https)
            if ($port && (($scheme === 'http' && $port !== 80) || ($scheme === 'https' && $port !== 443))) {
                $baseUrl .= ':' . $port;
            }
            
            // Pastikan tidak ada trailing slash
            $view->with('baseUrl', rtrim($baseUrl, '/'));
        });
    }
}

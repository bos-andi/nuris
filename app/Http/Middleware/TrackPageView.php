<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\PageView;
use Illuminate\Support\Facades\Log;

class TrackPageView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Skip tracking for admin routes, API routes, AJAX requests, and non-200 responses
        if ($request->is('admin/*') || 
            $request->is('api/*') || 
            $request->ajax() || 
            $request->wantsJson() ||
            $response->getStatusCode() !== 200 ||
            $request->is('*.css') ||
            $request->is('*.js') ||
            $request->is('*.jpg') ||
            $request->is('*.png') ||
            $request->is('*.gif') ||
            $request->is('*.svg') ||
            $request->is('*.ico')) {
            return $response;
        }

        // Track page view asynchronously to avoid slowing down the response
        try {
            $this->trackView($request);
        } catch (\Exception $e) {
            // Log error but don't break the request
            Log::error('Failed to track page view: ' . $e->getMessage());
        }

        return $response;
    }

    protected function trackView(Request $request)
    {
        $userAgent = $request->userAgent();
        $deviceInfo = $this->parseUserAgent($userAgent);

        PageView::create([
            'url' => $request->fullUrl(),
            'page_title' => $this->getPageTitle($request),
            'ip_address' => $request->ip(),
            'user_agent' => $userAgent,
            'device_type' => $deviceInfo['device_type'],
            'browser' => $deviceInfo['browser'],
            'browser_version' => $deviceInfo['browser_version'],
            'os' => $deviceInfo['os'],
            'os_version' => $deviceInfo['os_version'],
            'referrer' => $request->header('referer'),
            'session_id' => $request->session()->getId(),
            'viewed_at' => now(),
        ]);
    }

    protected function parseUserAgent($userAgent)
    {
        $deviceType = 'desktop';
        $browser = 'Unknown';
        $browserVersion = null;
        $os = 'Unknown';
        $osVersion = null;

        if (empty($userAgent)) {
            return compact('deviceType', 'browser', 'browserVersion', 'os', 'osVersion');
        }

        // Detect device type
        if (preg_match('/(tablet|ipad|playbook|silk)|(android(?!.*mobile))/i', $userAgent)) {
            $deviceType = 'tablet';
        } elseif (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', $userAgent)) {
            $deviceType = 'mobile';
        }

        // Detect browser
        if (preg_match('/MSIE\s([0-9\.]+)/i', $userAgent, $matches)) {
            $browser = 'Internet Explorer';
            $browserVersion = $matches[1];
        } elseif (preg_match('/Edge\/([0-9\.]+)/i', $userAgent, $matches)) {
            $browser = 'Edge';
            $browserVersion = $matches[1];
        } elseif (preg_match('/Chrome\/([0-9\.]+)/i', $userAgent, $matches)) {
            $browser = 'Chrome';
            $browserVersion = $matches[1];
        } elseif (preg_match('/Safari\/([0-9\.]+)/i', $userAgent, $matches) && !preg_match('/Chrome/i', $userAgent)) {
            $browser = 'Safari';
            $browserVersion = $matches[1];
        } elseif (preg_match('/Firefox\/([0-9\.]+)/i', $userAgent, $matches)) {
            $browser = 'Firefox';
            $browserVersion = $matches[1];
        } elseif (preg_match('/Opera\/([0-9\.]+)/i', $userAgent, $matches)) {
            $browser = 'Opera';
            $browserVersion = $matches[1];
        }

        // Detect OS
        if (preg_match('/Windows NT ([0-9\.]+)/i', $userAgent, $matches)) {
            $os = 'Windows';
            $osVersion = $matches[1];
        } elseif (preg_match('/Mac OS X ([0-9_\.]+)/i', $userAgent, $matches)) {
            $os = 'macOS';
            $osVersion = str_replace('_', '.', $matches[1]);
        } elseif (preg_match('/Android ([0-9\.]+)/i', $userAgent, $matches)) {
            $os = 'Android';
            $osVersion = $matches[1];
        } elseif (preg_match('/iPhone OS ([0-9_\.]+)/i', $userAgent, $matches)) {
            $os = 'iOS';
            $osVersion = str_replace('_', '.', $matches[1]);
        } elseif (preg_match('/Linux/i', $userAgent)) {
            $os = 'Linux';
        }

        return compact('deviceType', 'browser', 'browserVersion', 'os', 'osVersion');
    }

    protected function getPageTitle(Request $request)
    {
        // This will be set by the view, but we can try to extract from route
        $route = $request->route();
        if ($route) {
            $routeName = $route->getName();
            if ($routeName) {
                return ucfirst(str_replace(['.', '-'], ' ', $routeName));
            }
        }
        return $request->path();
    }
}

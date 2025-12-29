<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class PageView extends Model
{
    protected $fillable = [
        'url',
        'page_title',
        'ip_address',
        'user_agent',
        'device_type',
        'browser',
        'browser_version',
        'os',
        'os_version',
        'country',
        'city',
        'referrer',
        'session_id',
        'viewed_at',
    ];

    protected $casts = [
        'viewed_at' => 'datetime',
    ];

    // Scopes
    public function scopeToday($query)
    {
        return $query->whereDate('viewed_at', today());
    }

    public function scopeThisWeek($query)
    {
        return $query->whereBetween('viewed_at', [now()->startOfWeek(), now()->endOfWeek()]);
    }

    public function scopeThisMonth($query)
    {
        return $query->whereMonth('viewed_at', now()->month)
                     ->whereYear('viewed_at', now()->year);
    }

    public function scopeRealtime($query, $minutes = 5)
    {
        return $query->where('viewed_at', '>=', now()->subMinutes($minutes));
    }

    // Helper methods
    public static function getDeviceStats()
    {
        return self::selectRaw('device_type, COUNT(*) as count')
            ->whereNotNull('device_type')
            ->groupBy('device_type')
            ->get()
            ->pluck('count', 'device_type');
    }

    public static function getBrowserStats()
    {
        return self::selectRaw('browser, COUNT(*) as count')
            ->whereNotNull('browser')
            ->groupBy('browser')
            ->get()
            ->pluck('count', 'browser');
    }

    public static function getOSStats()
    {
        return self::selectRaw('os, COUNT(*) as count')
            ->whereNotNull('os')
            ->groupBy('os')
            ->get()
            ->pluck('count', 'os');
    }

    public static function getTopPages($limit = 10)
    {
        return self::selectRaw('url, page_title, COUNT(*) as views')
            ->groupBy('url', 'page_title')
            ->orderBy('views', 'desc')
            ->limit($limit)
            ->get();
    }
}

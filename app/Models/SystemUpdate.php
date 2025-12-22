<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SystemUpdate extends Model
{
    protected $fillable = [
        'version',
        'updated_by',
        'updated_by_name',
        'status',
        'has_error',
        'steps_data',
        'errors_data',
        'output_data',
    ];

    protected $casts = [
        'has_error' => 'boolean',
        'steps_data' => 'array',
        'errors_data' => 'array',
        'output_data' => 'array',
    ];

    /**
     * Get the user who performed the update
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    /**
     * Get formatted date
     */
    public function getFormattedDateAttribute()
    {
        return $this->created_at->format('d/m/Y H:i:s');
    }

    /**
     * Get next version number
     */
    public static function getNextVersion()
    {
        $lastUpdate = self::orderBy('version', 'desc')->first();
        return $lastUpdate ? $lastUpdate->version + 1 : 1;
    }

    /**
     * Get total update count
     */
    public static function getTotalUpdates()
    {
        return self::count();
    }
}


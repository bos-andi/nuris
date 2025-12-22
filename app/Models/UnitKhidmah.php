<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnitKhidmah extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'subtitle',
        'description',
        'image',
        'video_url',
        'video_id',
        'narasi',
        'intro_text',
        'visi',
        'misi',
        'contact_email',
        'contact_phone',
        'operational_hours',
        'location',
        'meta_title',
        'meta_description',
        'is_active',
        'order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Extract YouTube video ID from URL
     */
    public function extractVideoId($url)
    {
        if (empty($url)) {
            return null;
        }

        // Handle different YouTube URL formats
        $patterns = [
            '/youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/',
            '/youtu\.be\/([a-zA-Z0-9_-]+)/',
            '/youtube\.com\/embed\/([a-zA-Z0-9_-]+)/',
        ];

        foreach ($patterns as $pattern) {
            if (preg_match($pattern, $url, $matches)) {
                return $matches[1];
            }
        }

        // If no pattern matches, assume it's already a video ID
        return $url;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Gallery extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'type',
        'description',
        'image_path',
        'video_url',
        'video_embed_code',
        'order',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'order' => 'integer',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($gallery) {
            if (empty($gallery->slug)) {
                $gallery->slug = Str::slug($gallery->title);
            }
        });

        static::updating(function ($gallery) {
            if ($gallery->isDirty('title') && empty($gallery->slug)) {
                $gallery->slug = Str::slug($gallery->title);
            }
        });
    }

    /**
     * Scope a query to only include published galleries.
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    /**
     * Scope a query to filter by type.
     */
    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }

    /**
     * Scope a query to order by order field.
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc')->orderBy('created_at', 'desc');
    }

    /**
     * Get the gallery items for the gallery.
     */
    public function items()
    {
        return $this->hasMany(GalleryItem::class)->orderBy('order', 'asc');
    }

    /**
     * Get YouTube embed URL from video URL
     */
    public function getEmbedUrlAttribute()
    {
        if (!$this->video_url) {
            return null;
        }

        $url = trim($this->video_url);
        
        // If already embed URL, return as is (but preserve timestamp if exists)
        if (preg_match('/youtube\.com\/embed\/([a-zA-Z0-9_-]+)/', $url, $matches)) {
            // Check if there's a timestamp parameter
            if (preg_match('/[?&]t=(\d+)s?/', $url, $timeMatches)) {
                $timestamp = $timeMatches[1];
                return 'https://www.youtube.com/embed/' . $matches[1] . '?start=' . $timestamp;
            }
            return $url;
        }

        // Extract video ID from various YouTube URL formats
        $videoId = null;
        $timestamp = null;
        
        // Format: https://youtu.be/VIDEO_ID?t=1139s (check this first as it's shorter)
        if (preg_match('/youtu\.be\/([a-zA-Z0-9_-]+)/', $url, $matches)) {
            $videoId = $matches[1];
            // Extract timestamp if exists
            if (preg_match('/[?&]t=(\d+)s?/', $url, $timeMatches)) {
                $timestamp = $timeMatches[1];
            }
        }
        // Format: https://www.youtube.com/watch?v=VIDEO_ID&t=1139s or https://youtube.com/watch?v=VIDEO_ID
        // Match video ID (11 characters) that comes after v= and before & or end of string
        elseif (preg_match('/(?:youtube\.com\/watch\?v=|youtube\.com\/v\/|youtube\.com\/watch\?.*[&?]v=)([a-zA-Z0-9_-]{11})(?:[&?]|$)/', $url, $matches)) {
            $videoId = $matches[1];
            // Extract timestamp if exists (can be &t= or ?t=)
            if (preg_match('/[?&]t=(\d+)s?/', $url, $timeMatches)) {
                $timestamp = $timeMatches[1];
            }
        }
        // Format: https://www.youtube.com/embed/VIDEO_ID
        elseif (preg_match('/youtube\.com\/embed\/([a-zA-Z0-9_-]+)/', $url, $matches)) {
            $videoId = $matches[1];
            // Extract timestamp if exists
            if (preg_match('/[?&]t=(\d+)s?/', $url, $timeMatches)) {
                $timestamp = $timeMatches[1];
            }
        }

        if ($videoId) {
            // Clean video ID (remove any extra characters)
            $videoId = preg_replace('/[^a-zA-Z0-9_-]/', '', $videoId);
            
            // Build embed URL with timestamp if exists
            $embedUrl = 'https://www.youtube.com/embed/' . $videoId;
            if ($timestamp) {
                $embedUrl .= '?start=' . $timestamp;
            }
            
            return $embedUrl;
        }

        // If we can't parse it, return original URL (might be Vimeo or other platform)
        return $url;
    }
}

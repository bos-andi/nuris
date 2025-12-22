<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProgramUnggulan extends Model
{
    protected $fillable = [
        'slug', 'title', 'subtitle', 'description', 'image',
        'video_url', 'video_id', 'content', 'intro_text',
        'tujuan', 'materi', 'durasi', 'sasaran', 'benefit',
        'contact_email', 'contact_phone', 'pendaftaran_info',
        'meta_title', 'meta_description', 'is_active', 'order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($program) {
            if (empty($program->slug)) {
                $program->slug = Str::slug($program->title);
            }
        });

        static::updating(function ($program) {
            if ($program->isDirty('title') && empty($program->slug)) {
                $program->slug = Str::slug($program->title);
            }
        });
    }

    /**
     * Extract YouTube video ID from URL
     */
    public function extractVideoId($url = null)
    {
        $videoUrl = $url ?: $this->video_url;
        if (!$videoUrl) {
            return null;
        }

        $url = trim($videoUrl);
        
        // Extract video ID from various YouTube URL formats
        if (preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/|youtube\.com\/embed\/)([a-zA-Z0-9_-]{11})/', $url, $matches)) {
            return $matches[1];
        }

        return null;
    }

    /**
     * Get YouTube embed URL
     */
    public function getEmbedUrlAttribute()
    {
        if (!$this->video_url) {
            return null;
        }

        $videoId = $this->video_id ?: $this->extractVideoId($this->video_url);
        if ($videoId) {
            return 'https://www.youtube.com/embed/' . $videoId;
        }

        return null;
    }
}

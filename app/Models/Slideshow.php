<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slideshow extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'background_image',
        'video_url',
        'slide_type',
        'button_text',
        'button_link',
        'order',
        'is_active',
        'font_settings',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
        'font_settings' => 'array',
    ];

    /**
     * Scope a query to only include active slideshows.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to order slideshows.
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc');
    }
}

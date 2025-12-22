<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'featured_image',
        'event_date',
        'event_end_date',
        'location',
        'organizer',
        'contact_person',
        'contact_phone',
        'contact_email',
        'is_published',
        'published_at',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
        'event_date' => 'datetime',
        'event_end_date' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($event) {
            if (empty($event->slug)) {
                $event->slug = Str::slug($event->title);
            }
        });

        static::updating(function ($event) {
            if ($event->isDirty('title') && empty($event->slug)) {
                $event->slug = Str::slug($event->title);
            }
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function isUpcoming()
    {
        return $this->event_date > now();
    }

    public function isPast()
    {
        return $this->event_end_date ? $this->event_end_date < now() : $this->event_date < now();
    }
}

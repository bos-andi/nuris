<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryItem extends Model
{
    protected $fillable = [
        'gallery_id',
        'image_path',
        'order',
    ];

    protected $casts = [
        'order' => 'integer',
    ];

    /**
     * Get the gallery that owns the item.
     */
    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PengurusUnit extends Model
{
    protected $fillable = [
        'nama',
        'jabatan',
        'jabatan_lengkap',
        'foto',
        'unit',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc')->orderBy('created_at', 'desc');
    }

    public function scopeByUnit($query, $unit)
    {
        return $query->where('unit', $unit);
    }

    public function getFotoUrlAttribute()
    {
        if ($this->foto) {
            return Storage::url($this->foto);
        }
        return asset('img/team/vl-team-inner-1.1.png');
    }
}

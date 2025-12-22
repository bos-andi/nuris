<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'nama',
        'nip',
        'tmt',
        'tempat_tanggal_lahir',
        'alamat',
        'pendidikan_terakhir',
        'jabatan',
        'unit',
        'status',
        'email',
        'no_hp',
        'foto',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Scope a query to only include active staff.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to order staff.
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc')->orderBy('nama', 'asc');
    }

    /**
     * Scope a query to filter by status.
     */
    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posyandu extends Model
{
    use HasFactory;
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query ->where('nama_posyandu', 'like', '%'.$search.'%')
            ->orWhere('email', 'like', '%'.$search.'%')
            ->orWhere('alamat_lengkap', 'like', '%'.$search.'%');
        });

        $query->when($filters['provinsi'] ?? false, fn($query, $provinsi) =>
            $query->whereHas('provinsi', fn($query) =>
                $query->where('id_provinsi', $provinsi)
            )
        );
    }
}
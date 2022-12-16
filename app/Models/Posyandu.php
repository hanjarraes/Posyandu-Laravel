<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posyandu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('nama_posyandu', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('alamat_lengkap', 'like', '%' . $search . '%');
        });

        $query->when($filters['provinsi'] ?? false, function ($query, $provinsi) {
            return $query->join('provinsis', 'posyandus.id_provinsi', '=', 'provinsis.id')
                ->where('provinsis.id', strval($provinsi));
        });

        $query->when($filters['kabupaten'] ?? false, function ($query, $kabupaten) {
            return $query->join('kabupatens', 'posyandus.id_kabupaten', '=', 'kabupatens.id')
                ->where('kabupatens.id', strval($kabupaten));
        });

        $query->when($filters['provinsi'] ?? false, function ($query, $provinsi) {
            return $query->join('kecamatans', 'posyandus.id_kecamatan', '=', 'kecamatans.id')
                ->where('kecamatans.id', strval($provinsi));
        });
    }
}

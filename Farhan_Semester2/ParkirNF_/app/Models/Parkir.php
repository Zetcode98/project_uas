<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parkir extends Model
{
    use HasFactory;

    protected $fillable = [
        'merk',
        'pemilik',
        'nopol',
        'thn_beli',
        'deskripsi',
        'kapasitas_kursi',
        'jenis_kendaraan_id',
    ];

    public function jenis()
    {
        return $this->belongsTo(Jenis::class, 'jenis_kendaraan_id');
    }
}

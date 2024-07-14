<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'Transaksi';
    protected $fillable = ['id', 'tanggal', 'mulai', 'akhir', 'keterangan', 'biaya', 'kendaraan_id', 'area_parkir_id'];
}
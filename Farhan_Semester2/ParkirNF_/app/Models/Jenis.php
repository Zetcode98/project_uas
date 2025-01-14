<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;

    protected $table = 'Jenis';
    protected $fillable = ['id', 'nama'];

    public function parkir() 
    {
        return $this->hasMany(Parkir::class, 'jenis_kendaraan_id');
    }
}



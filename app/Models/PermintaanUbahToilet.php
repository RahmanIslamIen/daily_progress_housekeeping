<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermintaanUbahToilet extends Model
{
    use HasFactory;
    protected $table = 'permintaan_ubah_toilet';
    protected $fillable = [
        'kd_toilet',
        'kondisi_toilet',
        'keterangan',
        'ploting_lantai',
        'jenis_toilet',
        'progress'
    ];
}

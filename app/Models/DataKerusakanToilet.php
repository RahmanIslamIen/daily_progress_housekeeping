<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKerusakanToilet extends Model
{
    use HasFactory;
    protected $table = 'data_kerusakan_toilet';
    protected $fillable = [
        'kd_karyawan',
        'kd_toilet',
        'tanggal_pembuatan',
        'tanggal_kejadian',
        'nama_kerusakan',
        'lokasi_kerusakan',
        'kronologi_kerusakan',
        'tindakan',
        'lampiran_foto',
        'yang_melaporkan',
        'yang_mengetahui',
        'catatan_perbaikan',
        'yang_mengerjakan'
    ];
}

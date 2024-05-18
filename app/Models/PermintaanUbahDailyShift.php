<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermintaanUbahDailyShift extends Model
{
    use HasFactory;
    protected $table = 'permintaan_ubah_daily_shift';
    protected $fillable = [
        'kd_daily_task',
        'ploting_lantai',
        'kd_karyawan',
        'jenis_shift',
        'tanggal',
        'nama',
        'checklist_masuk',
        'checklist_keluar',
        'approval'
    ];
}

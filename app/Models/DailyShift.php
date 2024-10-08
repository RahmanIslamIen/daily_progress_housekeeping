<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyShift extends Model
{
    use HasFactory;

    protected $table = 'daily_shift';

    protected $fillable = [
        'kd_daily_task',
        'ploting_lantai',
        'kd_karyawan',
        'jenis_shift',
        'tanggal',
        'nama',
        'checklist_masuk',
        'checklist_keluar',
    ];
}

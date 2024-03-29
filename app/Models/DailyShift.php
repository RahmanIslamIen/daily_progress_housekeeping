<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyShift extends Model
{
    use HasFactory;

    protected $table = 'daily_shift';

    protected $fillable = [
        'id_daily_task',
        'ploting_lantai',
        'jenis_lantai',
        'jenis_shift',
        'tanggal',
        'nama',
        'checklist_masuk',
        'checklist_keluar',
    ];

    // Relasi ke tabel daily_tasks
    // public function dailyTask()
    // {
    //     return $this->belongsTo(DailyTask::class, 'id_daily_task');
    // }
}

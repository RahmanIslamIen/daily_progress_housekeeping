<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShiftTask extends Model
{
    use HasFactory;
    protected $table = 'shift_task';
    protected $fillable = [
        'kd_daily_task',
        'jam',
        'task_pekerjaan',
        'jenis_toilet',
        'keterangan'
    ];
}

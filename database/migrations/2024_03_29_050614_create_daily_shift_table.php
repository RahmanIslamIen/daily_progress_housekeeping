<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyShiftTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_shift', function (Blueprint $table) {
            $table->id();
            $table->char('kd_daily_task');
            $table->string('ploting_lantai');
            $table->string('kd_karyawan');
            $table->string('jenis_shift');
            $table->date('tanggal');
            $table->string('nama');
            $table->text('checklist_masuk');
            $table->text('checklist_keluar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daily_shift');
    }
}

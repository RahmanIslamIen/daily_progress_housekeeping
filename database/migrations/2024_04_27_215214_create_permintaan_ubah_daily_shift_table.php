<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('permintaan_ubah_daily_shift', function (Blueprint $table) {
            $table->id();
            $table->string('kd_daily_task');
            $table->string('ploting_lantai');
            $table->string('kd_karyawan');
            $table->string('jenis_shift');
            $table->date('tanggal');
            $table->string('nama');
            $table->text('checklist_masuk');
            $table->text('checklist_keluar');
            $table->string('approval');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permintaan_ubah_daily_shift');
    }
};

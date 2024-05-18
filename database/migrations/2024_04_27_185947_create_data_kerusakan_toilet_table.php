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
        Schema::create('data_kerusakan_toilet', function (Blueprint $table) {
            $table->id();
            $table->string('kd_karyawan');
            $table->string('kd_toilet');
            $table->date('tanggal_pembuatan');
            $table->date('tanggal_kejadian');
            $table->string('nama_kerusakan');
            $table->text('lokasi_kerusakan');
            $table->text('kronologi_kerusakan');
            $table->text('tindakan');
            $table->string('lampiran_foto');
            $table->string('yang_melaporkan');
            $table->string('yang_mengetahui');
            $table->text('catatan_perbaikan')->nullable();
            $table->string('yang_mengerjakan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kerusakan_toilet');
    }
};

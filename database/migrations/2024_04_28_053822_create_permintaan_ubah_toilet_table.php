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
        Schema::create('permintaan_ubah_toilet', function (Blueprint $table) {
            $table->id();
            $table->string('kd_toilet');
            $table->string('kondisi_toilet');
            $table->text('keterangan');
            $table->string('ploting_lantai');
            $table->string('jenis_toilet');
            $table->string('progress');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permintaan_ubah_toilet');
    }
};

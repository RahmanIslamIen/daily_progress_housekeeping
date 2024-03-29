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
            $table->unsignedBigInteger('id_daily_task');
            $table->string('ploting_lantai');
            $table->string('jenis_lantai');
            $table->string('jenis_shift');
            $table->date('tanggal');
            $table->string('nama');
            $table->text('checklist_masuk');
            $table->text('checklist_keluar');
            $table->timestamps();

            // Foreign key constraint
            //$table->foreign('id_daily_task')->references('id')->on('daily_tasks')->onDelete('cascade');
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

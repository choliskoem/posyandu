<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('tb_antrian', function (Blueprint $table) {
            $table->id('id_antrian');
            $table->unsignedBigInteger('id_jadwal');
            $table->unsignedBigInteger('id_anak');
            $table->dateTime('waktu_antrian');
            $table->integer('nomor_antrian');
            $table->timestamps();

            // Foreign keys
            $table->foreign('id_jadwal')->references('id_jadwal')->on('tb_jadwal')->onDelete('cascade');
            $table->foreign('id_anak')->references('id_anak')->on('tb_anak')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_antrian');
    }
};

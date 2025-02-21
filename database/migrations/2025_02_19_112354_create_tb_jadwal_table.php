<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tb_jadwal', function (Blueprint $table) {
            $table->id('id_jadwal'); // Auto-increment primary key
            $table->integer('tanggal'); // Menyimpan tanggal
            $table->integer('bulan');   // Menyimpan bulan
            $table->integer('tahun');   // Menyimpan tahun
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_jadwal');
    }
};

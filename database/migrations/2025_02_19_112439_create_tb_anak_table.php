<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::create('tb_anak', function (Blueprint $table) {
             $table->id('id_anak');
             $table->foreignId('id_orang_tua')->constrained('tb_orang_tua')->onDelete('cascade');
             $table->string('nama', 100);
             $table->string('nik', 16)->unique();
             $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
             $table->integer('umur_tahun')->nullable();
             $table->integer('umur_bulan')->nullable();
             $table->enum('JK', ['L', 'P']); // L = Laki-laki, P = Perempuan
             $table->integer('anak_ke');
             $table->timestamps();

             // Foreign Key Constraint

         });
     }

    /**
      * Rollback migrasi.
      */
     public function down(): void
     {
         Schema::dropIfExists('tb_anak');
     }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('tb_pemeriksaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_anak')->on('tb_anak')->onDelete('cascade');
            $table->foreignId('id_orang_tua')->constrained('tb_orang_tua')->onDelete('cascade');
            $table->date('tanggal');
            $table->decimal('berat_badan', 5, 2);
            $table->decimal('tinggi_badan', 5, 2);
            $table->decimal('lingkar_kepala', 5, 2);
            $table->enum('vitamin_A', ['Ya', 'Tidak']);
            $table->enum('imunisasi_BCG', ['Ya', 'Tidak']);
            $table->enum('imunisasi_DPT_HB1', ['Ya', 'Tidak']);
            $table->enum('imunisasi_DPT_HB2', ['Ya', 'Tidak']);
            $table->enum('imunisasi_DPT_HB3', ['Ya', 'Tidak']);
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_pemeriksaan');
    }
};

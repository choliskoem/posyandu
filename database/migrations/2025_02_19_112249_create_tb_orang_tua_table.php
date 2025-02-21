<?php

 use Illuminate\Database\Migrations\Migration;
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Support\Facades\Schema;

 return new class extends Migration {
     /**
      * Jalankan migration.
      */
     public function up(): void
     {
         Schema::create('tb_orang_tua', function (Blueprint $table) {
             $table->id(); // Primary Key
             $table->string('nama', 100);
             $table->string('nik', 16)->unique();
             $table->string('alamat')->nullable();
             $table->string('no_hp', 15)->nullable();
             $table->timestamps(); // created_at & updated_at

         });
     }

     /**
      * Rollback migration.
      */
     public function down(): void
     {
         Schema::dropIfExists('tb_orang_tua');
}
};

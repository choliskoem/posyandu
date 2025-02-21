<?php

// namespace Database\Seeders;

// use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
// use Carbon\Carbon;

// class JadwalSeeder extends Seeder
// {
//     /**
//      * Jalankan database seeder.
//      */
//     public function run(): void
//     {
//         $jadwal = [
//             ['tanggal' => 5, 'bulan' => 1, 'tahun' => 2025],

//         ];

//         foreach ($jadwal as $data) {
//             DB::table('tb_jadwal')->insert([
//                 'tanggal' => $data['tanggal'],
//                 'bulan' => $data['bulan'],
//                 'tahun' => $data['tahun'],
//                 'created_at' => Carbon::now(),
//                 'updated_at' => Carbon::now(),
//             ]);
//         }
//     }
// }

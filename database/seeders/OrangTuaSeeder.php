<?php

// namespace Database\Seeders;

// use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
// use Carbon\Carbon;

// class OrangTuaSeeder extends Seeder
// {
//     /**
//      * Jalankan database seeds.
//      */
//     public function run(): void
//     {
//         $orangTuaList = [
//             [
//                 'id_orang_tua' => 1,
//                 'nama' => 'Siti Aminah',
//                 'nik' => '321001230001',
//                 'alamat' => 'Jl. Merdeka No. 1, Jakarta',
//                 'no_hp' => '081234567891',
//             ],
//             [
//                 'id_orang_tua' => 2,
//                 'nama' => 'Rahmawati',
//                 'nik' => '321001230002',
//                 'alamat' => 'Jl. Sudirman No. 5, Bandung',
//                 'no_hp' => '081234567892',
//             ],
//             [
//                 'id_orang_tua' => 3,
//                 'nama' => 'Dewi Sartika',
//                 'nik' => '321001230003',
//                 'alamat' => 'Jl. Diponegoro No. 7, Surabaya',
//                 'no_hp' => '081234567893',
//             ],
//             [
//                 'id_orang_tua' => 4,
//                 'nama' => 'Fitri Handayani',
//                 'nik' => '321001230004',
//                 'alamat' => 'Jl. Gatot Subroto No. 12, Medan',
//                 'no_hp' => '081234567894',
//             ],
//             [
//                 'id_orang_tua' => 5,
//                 'nama' => 'Nani Wijayanti',
//                 'nik' => '321001230005',
//                 'alamat' => 'Jl. Thamrin No. 8, Yogyakarta',
//                 'no_hp' => '081234567895',
//             ],
//             [
//                 'id_orang_tua' => 6,
//                 'nama' => 'Sri Rahayu',
//                 'nik' => '321001230006',
//                 'alamat' => 'Jl. Ahmad Yani No. 3, Semarang',
//                 'no_hp' => '081234567896',
//             ],
//             [
//                 'id_orang_tua' => 7,
//                 'nama' => 'Lestari Wulandari',
//                 'nik' => '321001230007',
//                 'alamat' => 'Jl. Gajah Mada No. 9, Makassar',
//                 'no_hp' => '081234567897',
//             ],
//             [
//                 'id_orang_tua' => 8,
//                 'nama' => 'Citra Maharani',
//                 'nik' => '321001230008',
//                 'alamat' => 'Jl. Pemuda No. 2, Malang',
//                 'no_hp' => '081234567898',
//             ],
//             [
//                 'id_orang_tua' => 9,
//                 'nama' => 'Farah Nabila',
//                 'nik' => '321001230009',
//                 'alamat' => 'Jl. Cihampelas No. 11, Bandung',
//                 'no_hp' => '081234567899',
//             ],
//             [
//                 'id_orang_tua' => 10,
//                 'nama' => 'Widya Sari',
//                 'nik' => '321001230010',
//                 'alamat' => 'Jl. Kaliurang No. 6, Yogyakarta',
//                 'no_hp' => '081234567900',
//             ],
//             [
//                 'id_orang_tua' => 11,
//                 'nama' => 'Aulia Rahma',
//                 'nik' => '321001230011',
//                 'alamat' => 'Jl. Sisingamangaraja No. 4, Medan',
//                 'no_hp' => '081234567901',
//             ],
//             [
//                 'id_orang_tua' => 12,
//                 'nama' => 'Putri Ayu',
//                 'nik' => '321001230012',
//                 'alamat' => 'Jl. Dipati Ukur No. 15, Bandung',
//                 'no_hp' => '081234567902',
//             ],
//             [
//                 'id_orang_tua' => 13,
//                 'nama' => 'Zahra Fitriani',
//                 'nik' => '321001230013',
//                 'alamat' => 'Jl. Braga No. 20, Bandung',
//                 'no_hp' => '081234567903',
//             ],
//             [
//                 'id_orang_tua' => 14,
//                 'nama' => 'Ilham Pratama',
//                 'nik' => '321001230014',
//                 'alamat' => 'Jl. Cendrawasih No. 8, Palembang',
//                 'no_hp' => '081234567904',
//             ],
//             [
//                 'id_orang_tua' => 15,
//                 'nama' => 'Syifa Zahira',
//                 'nik' => '321001230015',
//                 'alamat' => 'Jl. Mangga No. 3, Surabaya',
//                 'no_hp' => '081234567905',
//             ],
//         ];

//         // Insert data ke database dengan `created_at` & `updated_at`
//         foreach ($orangTuaList as $orangTua) {
//             DB::table('tb_orang_tua')->insert([
//                 'id_orang_tua' => $orangTua['id_orang_tua'],
//                 'nama' => $orangTua['nama'],
//                 'nik' => $orangTua['nik'],
//                 'alamat' => $orangTua['alamat'],
//                 'no_hp' => $orangTua['no_hp'],
//                 'created_at' => Carbon::now(),
//                 'updated_at' => Carbon::now(),
//             ]);
//         }
//     }
// }

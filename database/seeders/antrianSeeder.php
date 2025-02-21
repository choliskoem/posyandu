<!-- <?php

// namespace Database\Seeders;

// use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Carbon;

// class AntrianSeeder extends Seeder
// {
//     public function run()
//     {
//         // Ambil semua data anak dari tabel tb_anak
//         $anakList = DB::table('tb_anak')->pluck('id_anak');
//         $jadwalList = DB::table('tb_jadwal')->pluck('id_jadwal');

//         // Pastikan ada jadwal tersedia
//         if ($jadwalList->isEmpty()) {
//             $this->command->warn('Tidak ada data jadwal dalam tb_jadwal. Seeder tidak bisa dijalankan.');
//             return;
//         }

//         // Kosongkan tabel sebelum insert
//         DB::table('tb_antrian')->truncate();

//         // Loop untuk setiap anak dan masukkan ke dalam antrian
//         foreach ($anakList as $index => $id_anak) {
//             DB::table('tb_antrian')->insert([
//                 'id_jadwal' => $jadwalList->random(), // Ambil id_jadwal secara acak
//                 'id_anak' => $id_anak,
//                 'waktu_antrian' => Carbon::now()->addMinutes($index * 10), // Set waktu antrian berbeda
//                 'nomor_antrian' => $index + 1,
//                 'created_at' => now(),
//                 'updated_at' => now(),
//             ]);
//         }
//     }
// }

<!-- <?php

// namespace Database\Seeders;

// use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Str;

// class AnakSeeder extends Seeder
// {
//     /**
//      * Jalankan seeder ini.
//      */
//     public function run(): void
//     {
//         $anakData = [];

//         for ($i = 1; $i <= 15; $i++) {
//             $anakData[] = [
//                 'id_anak' => $i,
//                 'id_orang_tua' => rand(1, 10), // Anggap ada 10 orang tua
//                 'nama' => 'Anak ' . $i,
//                 'nik' => str_pad(rand(1000000000000000, 9999999999999999), 16, '0', STR_PAD_LEFT),
//                 'tempat_lahir' => 'Kota ' . chr(64 + $i), // Kota A, B, C, ...
//                 'tanggal_lahir' => now()->subYears(rand(1, 5))->subMonths(rand(0, 11))->format('Y-m-d'),
//                 'umur_tahun' => rand(1, 5),
//                 'umur_bulan' => rand(0, 11),
//                 'JK' => (rand(0, 1) == 1) ? 'L' : 'P',
//                 'anak_ke' => rand(1, 5),
//                 'created_at' => now(),
//                 'updated_at' => now(),
//             ];
//         }

//         DB::table('tb_anak')->insert($anakData);
//     }
// }

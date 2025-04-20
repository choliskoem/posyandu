<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
          User::create([
            'name' => "Helwa",
            'noKK' => "admin@gmail.com",
            'password' => Hash::make('admin#123'),
            'level' => 'masyarakat',
            'id_orang_tua' => '12'
          ]);
    }
}

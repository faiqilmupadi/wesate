<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\ProgramStudi;
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
        // $this->call(UserSeeder::class);
        // $this->call(MahasiswaSeeder::class);
        // $this->call(KaprodiSeeder::class);

        $this->call([
            UserSeeder::class,
            FakultasSeeder::class,
            ProgramStudiSeeder::class,
            PembimbingAkademikSeeder::class,
            BagianAkademikSeeder::class,
            MahasiswaSeeder::class,
            DekanSeeder::class,
            KetuaProgramStudiSeeder::class,
        ]);
    }
}

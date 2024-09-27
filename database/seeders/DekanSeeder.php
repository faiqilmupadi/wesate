<?php

namespace Database\Seeders;

use App\Models\Dekan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DekanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Dekan::factory()->count(2)->create();
        DB::table('dekan')->insert([
            'nidn_dekan' => '198101020000000055',
            'nama_dekan' => 'Sandy Kurniawan, S.Kom., M.kom', // Nama dekan mengikuti nama di user
            'email' => 'sandy.kurniawan@live.undip.ac.id', // Email mengikuti email di user
            'id_fakultas' => 1,
        ]);
    }
}

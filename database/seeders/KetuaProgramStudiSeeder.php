<?php

namespace Database\Seeders;
use App\Models\Ketuaprogramstudi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KetuaProgramStudiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ketuaprogramstudi::factory()->count(2)->create();
        DB::table('ketuaprogramstudi')->insert([
            'nidn_ketuaprogramstudi' => '198101020000000002', 
            'nama_ketuaprogramstudi' => 'Dr. Aris Sugiharto, S.Si., M.Kom.', 
            'id_programstudi' => 1, 
            'email' => 'aris.sugiharto@live.undip.ac.id', 
            'id_fakultas' => 1, 
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\ProgramStudi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramStudiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programstudi = new ProgramStudi();
        $programstudi -> nama_programstudi = 'Informatika';
        $programstudi -> id_fakultas = 1;
        $programstudi -> save(); 
    }
}

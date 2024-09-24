<?php

namespace Database\Seeders;
use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $mahasiswa = new Mahasiswa;
        // $mahasiswa -> nim = '24060122130076';
        // $mahasiswa -> nama = 'Azzam Saefudin Rosyidi';
        // $mahasiswa -> email = 'azzamsaefudinrosyidi@students.undip.ac.id';
        // $mahasiswa -> semester = 7;
        // $mahasiswa -> save();
        Mahasiswa::factory()->count(50)->create();
    }
}

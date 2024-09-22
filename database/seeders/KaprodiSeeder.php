<?php

namespace Database\Seeders;
use App\Models\Kaprodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaprodiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kaprodi = new Kaprodi;
        $kaprodi -> nidn = '123456789123456789';
        $kaprodi -> nama = 'Budi';
        $kaprodi -> email = 'budi@live.undip.ac.id';
        $kaprodi -> save();
    }
}

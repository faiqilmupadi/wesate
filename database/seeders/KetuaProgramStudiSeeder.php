<?php

namespace Database\Seeders;
use App\Models\Ketuaprogramstudi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KetuaProgramStudiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kaprodi = new Ketuaprogramstudi;
        $kaprodi -> nidn = '123456789123456789';
        $kaprodi -> nama = 'Budi';
        $kaprodi -> email = 'budi@live.undip.ac.id';
        $kaprodi -> save();
    }
}

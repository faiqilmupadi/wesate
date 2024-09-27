<?php

namespace Database\Seeders;

use App\Models\BagianAkademik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BagianAkademikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BagianAkademik::factory()->count(1)->create();
    }
}

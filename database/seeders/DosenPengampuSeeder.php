<?php

namespace Database\Seeders;

use App\Models\DosenPengampu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenPengampuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DosenPengampu::factory()->count(10)->create();
    }
}

<?php

namespace Database\Factories;

use App\Models\DosenPengampu;
use App\Models\PembimbingAkademik;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DosenPengampu>
 */
class DosenPengampuFactory extends Factory
{

    protected $model = DosenPengampu::class;
    public function definition(): array
    {
        $pembimbingakademik = PembimbingAkademik::inRandomOrder()->first();

        return [
            'nidn_dosenpengampu' => $pembimbingakademik->nidn_pembimbingakademik, 
            'nama_dosenpengampu' => $pembimbingakademik->nama_pembimbingakademik, 
        ];
    }
}

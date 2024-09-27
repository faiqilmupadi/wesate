<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\PembimbingAkademik;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PembimbingAkademik>
 */
class PembimbingAkademikFactory extends Factory
{
    protected $model = PembimbingAkademik::class;
    
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();

        return [
            'nidn_pembimbingakademik' => $this->faker->unique()->numerify('1981010200000000##'), 
            'nama_pembimbingakademik' => $user->name, 
            'id_programstudi' => 1, 
            'email' => $user->email, 
            'id_fakultas' => 1, 
        ];
    }
}
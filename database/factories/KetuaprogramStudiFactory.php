<?php

namespace Database\Factories;
use App\Models\Ketuaprogramstudi;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KetuaprogramStudi>
 */
class KetuaprogramStudiFactory extends Factory
{

    protected $model = Ketuaprogramstudi::class;
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();

        return [
            'nidn_ketuaprogramstudi' => $this->faker->unique()->numerify('1981010200000000##'), 
            'nama_ketuaprogramstudi' => $user->name, 
            'id_programstudi' => 1, 
            'email' => $user->email, 
            'id_fakultas' => 1, 
        ];
    }
}

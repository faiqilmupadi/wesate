<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\BagianAkademik;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BagianAkademik>
 */
class BagianAkademikFactory extends Factory
{
    protected $model = BagianAkademik::class;

    public function definition(): array
    {
        // Ambil user secara acak dari tabel User
        $user = User::inRandomOrder()->first();

        return [
            'nidn_bagianakademik' => $this->faker->unique()->numerify('1981010200000000##'), // NIDN dekan unik
            'nama_bagianakademik' => $user->name, // Nama dekan mengikuti nama di user
            'email' => $user->email, // Email mengikuti email di user
            'id_fakultas' => 1, // Set fakultas ke ID 1
        ];
    }
}

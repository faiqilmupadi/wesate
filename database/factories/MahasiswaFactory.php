<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    protected $model = Mahasiswa::class;

    public function definition()
    {
        // Buat user baru
        $user = User::factory()->create();

        return [
            'nim' => $this->faker->unique()->numerify('24060122######'), // 14 karakter
            'nama' => substr($user->name, 0, 10),
            'email' => $user-> email, // Menggunakan email dari user yang baru dibuat
            'semester' => $this->faker->numberBetween(1, 8),
        ];
    }
}


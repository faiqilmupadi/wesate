<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => substr($this->faker->name, 0, 10),
            'email' => $this->faker->unique()->safeEmail, // Email sebagai primary key
            'password' => 'password', // Tidak di-hash
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
}


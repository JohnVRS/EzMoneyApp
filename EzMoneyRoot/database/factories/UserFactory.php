<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('123'), // senha padrão
            'remember_token' => Str::random(10),
            'phone' => fake()->phoneNumber(),
            'gender' => fake()->randomElement(['Masculino', 'Feminino']),
            'birth' => fake()->date('Y-m-d' , '2004-05-01'),
            'revenue' => fake()->randomFloat(2, 1000, 5000),
            'expense' => fake()->randomFloat(2, 500, 2000),
            'balance' => fake()->randomFloat(2, 500, 3000),
        ];
    }
}

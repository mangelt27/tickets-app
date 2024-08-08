<?php

namespace Database\Factories\Entities\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entities\Admin\User>
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
        $startDate = fake()->dateTimeBetween('-5 years', 'now');

        $validated = fake()->dateTimeBetween($startDate, 'now');

        $endDate = fake()->dateTimeBetween($validated, 'now');
        
        return [
            'firstname' => fake()->firstName,
            'lastname' => fake()->lastName,
            'email' => fake()->unique()->safeEmail,
            'username' => fake()->unique()->word,
            'password' => '123456789***',
            'start_date' => $startDate,
            'email_verified_at' => fake()->randomElement([null, $validated]),
            'end_date' => fake()->randomElement([$endDate, null]),
            'remember_token' => Str::random(10),
            'created_by' => 1,
            'updated_by' => 1,
        ];
    }
}

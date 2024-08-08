<?php

namespace Database\factories;

use App\Models\Entities\Admin\User;
use Illuminate\Database\Eloquent\Factories\Factory;
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
            'firstname' => fake()->firstName,
            'lastname' => fake()->lastName,
            'email' => fake()->unique()->safeEmail,
            'username' => fake()->unique()->word,
            'password' => '123456789***',
            'start_date' => ($start = fake()->dateTimeBetween($startDate = '-5 years', $endDate = 'now')),// DateTime('2003-03-15 02:00:49', 'Africa/Lagos')
            'email_verified_at' =>fake()->randomElement([null,($validated=fake()->dateTimeBetween($startDate = $start, $endDate = 'now'))]),
            'end_date' =>fake()->randomElement(fake()->dateTimeBetween($startDate = $validated, $endDate = 'now')),
            'remember_token' => Str::random(10),
            'created_by'=>1,
            'updated_by'=>1,

          /*   'firstname' => $this->faker->firstName,
            'lastname' => fake()->lastName,
            'email' => fake()->unique()->safeEmail,
            'username' => fake()->unique()->word,
            'password' => static::$password ??= Hash::make('password'),
            'start_date' => ($start = fake()->dateTimeBetween($startDate = '-5 years', $endDate = 'now')),// DateTime('2003-03-15 02:00:49', 'Africa/Lagos')
            'email_verified_at' =>fake()->randomElement([null,($validated=fake()->dateTimeBetween($startDate = $start, $endDate = 'now'))]),
            'end_date' =>fake()->randomElement(fake()->dateTimeBetween($startDate = $validated, $endDate = 'now')),
            'remember_token' => Str::random(10),
            'created_by'=>1,
            'updated_by'=>1, */
            ];
    }
}

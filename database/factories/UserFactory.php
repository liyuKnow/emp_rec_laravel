<?php

namespace Database\Factories;

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
    public function definition()
    {
        // return [
        //     'gender' => $faker->randomElements(['male', 'female']),
        //     'name' => $faker->name(function (array $user) {return $user['gender'];})
        // 'email' => $this->faker->unique()->safeEmail(),
        // 'email_verified_at' => now(),
        //   ]
        return [
            'first_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'username' => $this->faker->unique()->userName(),
            'password' => Hash::make('123456'), // password
            'user_type' => $this->faker->randomElements(['admin', 'employee'])[0],
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}

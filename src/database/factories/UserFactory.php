<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserFactory extends Factory
{
    protected $model=User::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $now=Carbon::now();
        return [
            'name' => $this->faker->name(),
            'gender' => $this->faker->numberBetween(1,2),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
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

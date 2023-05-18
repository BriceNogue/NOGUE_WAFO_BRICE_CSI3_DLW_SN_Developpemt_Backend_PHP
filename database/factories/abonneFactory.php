<?php

namespace Database\Factories;

use Facade\Ignition\Support\FakeComposer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class abonneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->nom(),
            'prenom' => fake()->prenom(),
            'age' => fake()->age(),
            'sexe' => fake()->sexe(),
            'profession' => fake()->profession(),
            'rue' => fake()->rue(),
            'code_postal' => fake()->code_postal(),
            'ville' => fake()->ville(),
            'pays' => fake()->pays(),
            'telephone' => fake()->telephone(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'remember_token' => Str::random(200),
        ];
    }

     /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}

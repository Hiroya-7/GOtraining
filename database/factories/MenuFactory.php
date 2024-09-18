<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use DateTime;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'part_id' => 1,
            'name' => fake()->word,
            'record' => fake()->word,
            'goal' => fake()->word,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use DateTime;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Part>
 */
class PartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>fake()->word,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
    }
}

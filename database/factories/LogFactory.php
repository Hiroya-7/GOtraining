<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use DateTime;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'menu_id' => 1,
            'folder_id' => 1,
            'weight' =>fake()->randomFloat(1, 1, 200),
            'reps' =>fake()->randomFloat(1, 1, 10),
            'set' =>fake()->randomFloat(1, 1, 10),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use DateTime;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'comment_id' =>fake()->numberBetween(1, 10),
            'folder_id' => 1,
            'body' =>fake()->word,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
    }
}

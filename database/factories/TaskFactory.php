<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title"=> fake()->title(),
            "body"=> fake()->text(),
            "status"=> fake()->text(),
            "views"=> fake()->numberBetween(0,10),
            "reward"=> fake()->numberBetween(69,404)
        ];
    }
}

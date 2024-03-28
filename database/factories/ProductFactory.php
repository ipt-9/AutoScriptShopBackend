<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
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
            "features"=> fake()->text(),
            "price"=> fake()->numberBetween(0,2000),
            "rating"=> fake()->numberBetween(0,10),
            "script"=> fake()->url()


        ];
    }
}

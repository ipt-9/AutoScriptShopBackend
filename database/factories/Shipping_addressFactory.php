<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shipping_address>
 */
class Shipping_addressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "firstname"=> fake()->firstName(),
            "lastname"=> fake()->name(),
            "streetname"=> fake()->address(),
            "housenumber"=>fake()->numberBetween(1,100),
            "place"=>fake()->city(),
            "country"=>fake()->country(),
            "postalcode"=>fake()->postcode()

        ];
    }
}

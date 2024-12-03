<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'rooms' => $this->faker->numberBetween(1, 10),
            'bedrooms' => $this->faker->numberBetween(1, 5),
            'bathrooms' => $this->faker->numberBetween(1, 5),
            'garages' => $this->faker->numberBetween(0, 3),
            'area' => $this->faker->numberBetween(50, 500), // in square meters
            'price' => $this->faker->numberBetween(50000, 500000),
            'image' => $this->faker->imageUrl(640, 480, 'property'), // URL of a fake image
            'status' => $this->faker->boolean(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'category_id' => $this->faker->numberBetween(1, 5),
            'author' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'quantity' => $this->faker->numberBetween(1, 10),
            'image' => $this->faker->imageUrl(),
        ];
    }
}

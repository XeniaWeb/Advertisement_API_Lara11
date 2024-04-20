<?php

namespace Database\Factories;

use App\Models\Advertisement;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Advertisement>
 */
class AdvertisementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(5, true),
            'description' => fake()->text(150, true),
            'images' => [
                fake()->imageUrl(240, 200),
                fake()->imageUrl(240, 200),
                fake()->imageUrl(240, 200),
                ],
            'price' => fake()->numberBetween(100, 1000),
            'comment' => 'Comment to ' . fake()->words(2, true),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

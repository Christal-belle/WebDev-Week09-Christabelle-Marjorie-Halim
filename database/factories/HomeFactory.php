<?php

namespace Database\Factories;

use App\Models\Home;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Home>
 */
class HomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'subtitle' => fake()->jobTitle(),
            'description' => fake()->paragraph(3),
            'button_text' => 'Explore Projects',
            'button_link' => '/projects',
        ];
    }
}

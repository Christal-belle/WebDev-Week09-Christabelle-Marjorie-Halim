<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->randomElement([
                'Website Artopia', 
                'Aplikasi Drama Watchlist', 
                'Amigurumi Crochet Penguin', 
                'Melukis Akrilik', 
                'Melukis Cat Air',
                'UI/UX TempatDuduk'
            ]),
            
            'category' => fake()->randomElement(['Web Development', 'Mobile App', 'Art & Craft', 'UI/UX Design']),
            
            'description' => fake()->paragraph(2),
            
            'link' => fake()->url(),
            
            'image' => fake()->randomElement([
                'kelinci3.jpeg', 
                'kelinci4.jpeg', 
                'kelinci5.jpeg', 
                'kelinci6.jpeg', 
                'kelinci7.jpeg', 
                'pudel.jpeg'
            ]),
        ];
    }
}
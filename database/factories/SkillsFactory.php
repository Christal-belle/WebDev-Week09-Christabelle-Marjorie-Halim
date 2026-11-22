<?php

namespace Database\Factories;

use App\Models\Skills;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Skills>
 */
class SkillsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $skill = fake()->randomElement([
            'Laravel',
            'Flutter',
            'Figma',
            'Make Up',
            'Crochet',
            'Melukis Akrilik',
            'Melukis Cat Air',
            'Visual Studio Code',
            'Java Spring Boot',
            'Canva'
        ]);

        $proficiency = ($skill === 'Visual Studio Code') 
            ? fake()->numberBetween(20, 60) 
            : fake()->numberBetween(70, 95);

        return [
            'skill' => $skill,
            'proficiency' => $proficiency,
        ];
    }
}
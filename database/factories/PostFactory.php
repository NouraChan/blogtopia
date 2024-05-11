<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Title' => fake()->name(),
            'Category' =>fake()->name(),
            'Author' =>fake()->name(),
            'Content'=>fake()->sentence(30),
            'Description'=> fake()->sentence(10),
            'user_id' => \App\Models\User::factory(),
            'category_id' => \App\Models\Category::factory(),

        ];
    }
}

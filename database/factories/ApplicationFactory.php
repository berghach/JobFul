<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Application>
 */
class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'message' => fake()->text(),
            'files' => json_encode([
                'file1.pdf'=> 'https://via.placeholder.com/150x150',
            ]),
            'user_id' => fake()->randomElement(User::pluck('id')),
            'post_id' => fake()->randomElement(Post::pluck('id')),
        ];
    }
}

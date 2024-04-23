<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $mediableType = fake()->randomElement([User::class, Post::class]);
        $mediableId = $mediableType === User::class ? User::class : Post::class;
        return [
            'type' => fake()->randomElement(['jpg','png','jpeg','pdf']),
            'name' => fake()->word(),
            'path' => 'https://via.placeholder.com/150x150',
            'mediable_type' => $mediableType,
            'mediable_id' => fake()->randomElement($mediableId::pluck('id')),
        ];
    }
}

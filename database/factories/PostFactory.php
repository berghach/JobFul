<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\User;
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
        $city = new City;
        $cities = $city->cities();
        return [
            'post_type' => fake()->randomElement(['job request', 'job offer', 'service request', 'service offer']),
            'title' => fake()->sentence(),
            'description' => fake()->paragraphs(3, true),
            'industry' => fake()->company(),
            'function' => fake()->jobTitle(),
            'location' => fake()->randomElement($cities),
            'user_id' => fake()->randomElement(User::pluck('id')),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_name' => fake()->company(),
            'industry' => fake()->company(),
            'bio' => fake()->sentence(),
            'company_headquarter' => fake()->address(),
            'links' => json_encode([
                'Link 1' => fake()->url(),
                'Link 2' => fake()->url(),
                'Link 3' => fake()->url(),
            ]),
            'logo' => 'https://via.placeholder.com/150x150',
        ];
    }
}

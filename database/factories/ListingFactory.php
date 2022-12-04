<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'tags' => $this->faker->sentence(),
            'hoster' => $this->faker->company(),
            'email' => $this->faker->companyEmail(),
            'location' => $this->faker->company(),
            'description' => $this->faker->paragraph(),
        ];
    }
}

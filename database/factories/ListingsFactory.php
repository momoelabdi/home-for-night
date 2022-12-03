<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ListingsFactory extends Factory
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
            'hoster' => $this->faker->copmany(),
            'email' => $this->faker->copmanyEmail(),
            'location' => $this->faker->copmany(),
            'description' => $this->faker->paragraph(5),
        ];
    }
}

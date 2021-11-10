<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieTestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'plot' => $this->faker->paragraph,
            'director' => $this->faker->name,
            'year_released' => random_int(1800, 2021),
            'leading_actors' => $this->faker->name,
            'imdb_url'=> $this->faker->url,
            'imdb_score' => random_int(0, 10)
        ];
    }
}

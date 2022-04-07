<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url_image' => $this->faker->imageUrl(640, 480, 'animals', true),
            'post_id' => NULL,
        ];
    }
}

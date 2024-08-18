<?php

namespace Database\Factories;

use App\Models\Technology;
use Illuminate\Database\Eloquent\Factories\Factory;

class TechnologyFactory extends Factory
{
    protected $model = Technology::class;

    public function definition()
    {
        return [
            'profileimage' => $this->faker->imageUrl(100, 100, 'tech', true, 'profile'),
            'username' => $this->faker->userName,
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph . ' ' . $this->faker->catchPhrase,
            'image' => $this->faker->imageUrl(800, 600, 'tech', true, 'image'),
        ];
    }
}

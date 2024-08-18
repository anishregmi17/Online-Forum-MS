<?php

namespace Database\Factories;

use App\Models\Sport;
use Illuminate\Database\Eloquent\Factories\Factory;

class SportFactory extends Factory
{
    protected $model = Sport::class;

    public function definition()
    {
        return [
            'profileimage' => $this->faker->imageUrl(100, 100, 'sports', true, 'profile'),
            'username' => $this->faker->userName,
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph . ' ' . $this->faker->sentence(3),
            'image' => $this->faker->imageUrl(800, 600, 'sports', true, 'image'),
        ];
    }
}

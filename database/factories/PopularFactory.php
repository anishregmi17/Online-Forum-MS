<?php

namespace Database\Factories;

use App\Models\Popular;
use Illuminate\Database\Eloquent\Factories\Factory;

class PopularFactory extends Factory
{
    protected $model = Popular::class;

    public function definition()
    {
        return [
            'profileimage' => $this->faker->imageUrl(100, 100, 'people', true, 'profile'),
            'username' => $this->faker->userName,
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl(800, 600, 'nature', true, 'image'),
        ];
    }
}

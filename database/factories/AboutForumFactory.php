<?php

namespace Database\Factories;

use App\Models\AboutForum;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutForumFactory extends Factory
{
    protected $model = AboutForum::class;

    public function definition()
    {
        return [
            'text' => $this->faker->sentence(10), // A sentence related to the forum's about section
            'description' => $this->faker->paragraph, // A paragraph providing more details
        ];
    }
}

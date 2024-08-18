<?php

namespace Database\Factories;

use App\Models\ContentPolicy;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContentPolicyFactory extends Factory
{
    protected $model = ContentPolicy::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(6), // A short sentence for the title
            'content' => $this->faker->paragraphs(3, true), // Multiple paragraphs of content
        ];
    }
}

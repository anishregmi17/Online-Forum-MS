<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContentPolicy;

class ContentPolicySeeder extends Seeder
{
    public function run()
    {
        // Create 5 ContentPolicy entries
        ContentPolicy::factory()->count(5)->create();
    }
}

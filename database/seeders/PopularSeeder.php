<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Popular;

class PopularSeeder extends Seeder
{
    public function run()
    {
        // Create 10 Popular entries
        Popular::factory()->count(10)->create();
    }
}

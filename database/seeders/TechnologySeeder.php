<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    public function run()
    {
        // Create 10 Technology entries
        Technology::factory()->count(10)->create();
    }
}

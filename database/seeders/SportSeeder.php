<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sport;

class SportSeeder extends Seeder
{
    public function run()
    {
        // Create 10 Sport entries
        Sport::factory()->count(10)->create();
    }
}

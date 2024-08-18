<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Call the PopularSeeder
        $this->call(PopularSeeder::class);
        $this->call(TechnologySeeder::class);
        $this->call(SportSeeder::class);
        $this->call(AboutForumSeeder::class);

    }
}

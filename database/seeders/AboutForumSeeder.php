<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutForum;

class AboutForumSeeder extends Seeder
{
    public function run()
    {
        // Create 5 AboutForum entries
        AboutForum::factory()->count(5)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\people::factory(10)->create();
        \App\Models\Watched::factory(10)->create();
        \App\Models\Movie::factory(10)->create();

    }
}

<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Project;
use App\Models\Gallery;
use App\Models\Team;
use App\Models\Image;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        User::truncate();
        Project::truncate();
        Gallery::truncate();
        Team::truncate();
        Image::truncate();

        \App\Models\User::factory(5)->create();
        \App\Models\Project::factory(30)->create();
        \App\Models\Gallery::factory(100)->create();
        \App\Models\Team::factory(20)->create();
        \App\Models\Image::factory(100)->create();
    }
}

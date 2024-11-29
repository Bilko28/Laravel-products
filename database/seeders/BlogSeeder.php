<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 20; $i++)
        {
        DB::table('blogs')->insert([
            'title' => $faker->text(100),
            'content' => $faker->text(1000),
            'author' => $faker->name(),
        ]);
        }
    }
}

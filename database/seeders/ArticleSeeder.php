<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        for ($i = 0; $i < 20; $i++) {
            DB::table('articles')->insert([
                'title' => $faker->sentence(3),
                'desc' => $faker->paragraph(20, false),
                'image' => $faker->imageUrl(640, 480, 'animals', true),
            ]);
        }
    }
}

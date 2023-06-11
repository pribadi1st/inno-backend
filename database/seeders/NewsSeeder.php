<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\News;
use Carbon\Carbon;
use App\Models\Author;
use App\Models\Categories;
use App\Models\NewsSources;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        News::truncate();
        $authors = Author::pluck('id')->toArray();
        $categories = Categories::pluck('id')->toArray();
        $sources = NewsSources::pluck('id')->toArray();

        for ($i = 0; $i < 50; $i++) {
            $createdAt = Carbon::now()->subDays(rand(1, 30))->subHours(rand(1, 24))->subMinutes(rand(1, 60));
            $updatedAt = $createdAt->copy()->addDays(rand(1, 30))->addHours(rand(1, 24))->addMinutes(rand(1, 60));

            News::create([
                'author_id' => $faker->randomElement($authors),
                'category_id' => $faker->randomElement($categories),
                'news_source_id' => $faker->randomElement($sources),
                'imageUrl' => $faker->imageUrl(),
                'content' => $faker->paragraph,
                'title' => $faker->sentence,
                'status' => $faker->randomElement(['published', 'draft']),
                'body' => $faker->text,
                'url' => $faker->url,
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
            ]);
        }
    }
}

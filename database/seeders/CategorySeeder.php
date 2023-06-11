<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Politics',
                'slug' => 'politics',
                'description' => 'News related to politics and government.',
            ],
            [
                'name' => 'Sports',
                'slug' => 'sports',
                'description' => 'News related to various sports and athletic events.',
            ],
            [
                'name' => 'Technology',
                'slug' => 'technology',
                'description' => 'News related to advancements in technology and digital innovation.',
            ],
            [
                'name' => 'Business',
                'slug' => 'business',
                'description' => 'News related to the world of business and commerce.',
            ],
            [
                'name' => 'Entertainment',
                'slug' => 'entertainment',
                'description' => 'News related to movies, music, celebrities, and popular culture.',
            ],
            [
                'name' => 'Health',
                'slug' => 'health',
                'description' => 'News related to health, wellness, and medical advancements.',
            ],
            [
                'name' => 'Science',
                'slug' => 'science',
                'description' => 'News related to scientific discoveries, research, and exploration.',
            ],
            [
                'name' => 'Education',
                'slug' => 'education',
                'description' => 'News related to the field of education and learning.',
            ],
            [
                'name' => 'Travel',
                'slug' => 'travel',
                'description' => 'News related to travel destinations, tips, and experiences.',
            ],
            [
                'name' => 'Fashion',
                'slug' => 'fashion',
                'description' => 'News related to the world of fashion, trends, and style.',
            ],
            [
                'name' => 'Food',
                'slug' => 'food',
                'description' => 'News related to culinary delights, recipes, and food culture.',
            ],
            [
                'name' => 'Art',
                'slug' => 'art',
                'description' => 'News related to visual arts, paintings, sculptures, and creativity.',
            ],
            [
                'name' => 'Music',
                'slug' => 'music',
                'description' => 'News related to music, albums, concerts, and musicians.',
            ],
            [
                'name' => 'Environment',
                'slug' => 'environment',
                'description' => 'News related to the environment, sustainability, and conservation efforts.',
            ],
            [
                'name' => 'Automotive',
                'slug' => 'automotive',
                'description' => 'News related to automobiles, cars, and the automotive industry.',
            ],
            [
                'name' => 'Books',
                'slug' => 'books',
                'description' => 'News related to books, authors, and literary works.',
            ],
            [
                'name' => 'Gaming',
                'slug' => 'gaming',
                'description' => 'News related to video games, gaming consoles, and the gaming industry.',
            ],
            [
                'name' => 'Fitness',
                'slug' => 'fitness',
                'description' => 'News related to fitness, workouts, and healthy lifestyle.',
            ],
            [
                'name' => 'Lifestyle',
                'slug' => 'lifestyle',
                'description' => 'News related to lifestyle, trends, and everyday living.',
            ],
            [
                'name' => 'Technology',
                'slug' => 'technology',
                'description' => 'News related to advancements in technology and digital innovation.',
            ],
        ];

        $categoryList = [];

        foreach ($categories as $category) {
            Categories::create($category);
        }
    }
}

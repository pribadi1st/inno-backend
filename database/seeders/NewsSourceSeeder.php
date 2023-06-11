<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NewsSources;

class NewsSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $sources = [
            [
                'name' => 'CNN',
                'slug' => 'cnn',
            ],
            [
                'name' => 'BBC',
                'slug' => 'bbc',
            ],
            [
                'name' => 'New York Times',
                'slug' => 'new-york-times',
            ],
            [
                'name' => 'Reuters',
                'slug' => 'reuters',
            ],
            [
                'name' => 'The Guardian',
                'slug' => 'the-guardian',
            ],
            [
                'name' => 'NBC News',
                'slug' => 'nbc-news',
            ],
            [
                'name' => 'ABC News',
                'slug' => 'abc-news',
            ],
            [
                'name' => 'CBS News',
                'slug' => 'cbs-news',
            ],
            [
                'name' => 'Fox News',
                'slug' => 'fox-news',
            ],
            [
                'name' => 'Associated Press',
                'slug' => 'associated-press',
            ],
            [
                'name' => 'The Washington Post',
                'slug' => 'the-washington-post',
            ],
            [
                'name' => 'USA Today',
                'slug' => 'usa-today',
            ],
            [
                'name' => 'Al Jazeera',
                'slug' => 'al-jazeera',
            ],
            [
                'name' => 'The Times',
                'slug' => 'the-times',
            ],
            [
                'name' => 'The Wall Street Journal',
                'slug' => 'the-wall-street-journal',
            ],
            [
                'name' => 'Bloomberg',
                'slug' => 'bloomberg',
            ],
            [
                'name' => 'CNN International',
                'slug' => 'cnn-international',
            ],
            [
                'name' => 'The Huffington Post',
                'slug' => 'the-huffington-post',
            ],
            [
                'name' => 'The Independent',
                'slug' => 'the-independent',
            ],
            [
                'name' => 'The Telegraph',
                'slug' => 'the-telegraph',
            ],
            // Add more sources as needed
        ];

        foreach ($sources as $source) {
            NewsSources::create($source);
        }
    }
}

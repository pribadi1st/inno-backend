<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
use Illuminate\Support\Facades\Hash;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        //
        $authors = [
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'account_status' => 'active',
                'username' => 'johndoe',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'account_status' => 'active',
                'username' => 'janesmith',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Mike Johnson',
                'email' => 'mikejohnson@example.com',
                'account_status' => 'inactive',
                'username' => 'mikejohnson',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Emily Brown',
                'email' => 'emilybrown@example.com',
                'account_status' => 'active',
                'username' => 'emilybrown',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'David Lee',
                'email' => 'davidlee@example.com',
                'account_status' => 'active',
                'username' => 'davidlee',
                'password' => Hash::make('password123'),
            ],
            // Add more authors as needed
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}

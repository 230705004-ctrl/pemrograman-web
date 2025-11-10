<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Zulkhaira',
            'email' => 'zulkhaira@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('password123')
        ]);

        Article::factory()->create([
            'title' => 'Belajar Pemrograman web',
            'content' => 'lorem ipsum',
            'user_id' => 1
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\BlogPost;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $blogPost = BlogPost::factory()->create();

        Comment::factory(3)->create([
            'blog_post_id' => $blogPost->id,
        ]);
    }
}

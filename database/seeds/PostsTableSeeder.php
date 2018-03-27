<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        for ($i = 0; $i < 20; $i++) {
            Post::create([
                'user_id' => $i,
                'title' => 'Post ' . $i
            ]);
        }
    }
}

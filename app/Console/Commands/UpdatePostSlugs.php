<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;
use Illuminate\Support\Str;

class UpdatePostSlugs extends Command
{
    protected $signature = 'posts:update-slugs';
    protected $description = 'Update all post slugs based on the title';

    public function handle()
    {
        $this->info('Updating post slugs...');

        $posts = Post::all();
        foreach ($posts as $post) {
            $post->slug = Str::slug($post->title);
            $post->save();
        }

        $this->info('Post slugs updated successfully!');
    }
}


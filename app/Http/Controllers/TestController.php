<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show($slug)
    {
        // Ambil post berdasarkan slug
        $post = Post::where('slug', $slug)->firstOrFail();

        // Kirim data ke view
        return view('posts.show', compact('post'));
    }
}

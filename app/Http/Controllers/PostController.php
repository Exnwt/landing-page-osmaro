<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $categoryId = $request->query('category_id');

    $categories = Category::whereHas('posts', function ($query) {
        $query->where('status', 'published');
    })->get();

    if ($categoryId) {
        $posts = Post::published()->where('category_id', $categoryId)->latest()->paginate(6);
    } else {
        $posts = Post::published()->latest()->paginate(6);
    }

    return view('posts.post', compact('posts', 'categories', 'categoryId'));
    }
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        $relatedPosts = Post::where('category_id', $post->category_id)
                            ->where('id', '!=', $post->id)
                            ->latest()
                            ->limit(4)
                            ->get();

        dd($relatedPosts);

        return view('posts.show', compact('post', 'relatedPosts'));
    }




}


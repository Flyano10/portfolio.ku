<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(9); // 9 posts per page
        return view('blog.index', compact('posts'));
    }

    public function show(Post $post)
    {
        // Get related posts (same category or recent posts)
        $relatedPosts = Post::where('id', '!=', $post->id)
                           ->latest()
                           ->limit(3)
                           ->get();
        
        return view('blog.show', compact('post', 'relatedPosts'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('admin.blog.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.blog.create', [
            'categories' => Post::categoryOptions(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'category' => 'required|in:' . implode(',', array_keys(Post::CATEGORIES)),
        ]);

        Post::create($request->only('judul', 'konten', 'category'));
        return redirect()->route('admin.blog.index')->with('success', 'Artikel berhasil ditambahkan!');
    }

    public function edit(Post $blog)
    {
        return view('admin.blog.edit', [
            'post' => $blog,
            'categories' => Post::categoryOptions(),
        ]);
    }

    public function update(Request $request, Post $blog)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'category' => 'required|in:' . implode(',', array_keys(Post::CATEGORIES)),
        ]);

        $blog->update($request->only('judul', 'konten', 'category'));
        return redirect()->route('admin.blog.index')->with('success', 'Artikel berhasil diupdate!');
    }

    public function destroy(Post $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Artikel berhasil dihapus.');
    }
}

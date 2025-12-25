<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Post;

class HomeController extends Controller
{
    // Halaman Beranda
    public function index()
    {
        $projects = Project::all();
        $posts = Post::latest()->limit(6)->get(); // Ambil 6 blog posts terbaru
        return view('home', compact('projects', 'posts'));
    }

    // Halaman Tentang Saya
    public function about()
    {
        return view('about');
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PostController; // ✅ Tambahkan ini
use App\Http\Controllers\Admin\PostController as AdminPostController;

// Halaman utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman Tentang
Route::get('/tentang', [HomeController::class, 'about'])->name('about');

// Blog routes
Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
Route::get('/blog/{post:id}', [PostController::class, 'show'])->name('blog.show');

// Halaman Kontak
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Form kontak
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// SEO Routes
Route::get('/sitemap.xml', function() {
    return response()->file(public_path('sitemap.xml'));
});

Route::get('/robots.txt', function() {
    return response()->file(public_path('robots.txt'));
});

// Dashboard default
Route::get('/dashboard', function () {
    $projects = \App\Models\Project::latest()->limit(3)->get();
    $messages = \App\Models\Contact::latest()->limit(3)->get();
    $stats = [
        'projects' => \App\Models\Project::count(),
        'posts' => \App\Models\Post::count(),
        'messages' => \App\Models\Contact::count(),
        'recent_messages' => \App\Models\Contact::whereDate('created_at', '>=', now()->subWeek())->count()
    ];
    
    return view('dashboard', compact('projects', 'messages', 'stats'));
})->middleware(['auth', 'verified'])->name('dashboard');

// Grup route khusus yang butuh login
Route::middleware(['auth'])->group(function () {
    // Admin: lihat dan hapus pesan kontak
    Route::get('/admin/kontak', [ContactController::class, 'adminIndex'])->name('kontak.index');
    Route::delete('/admin/kontak/{id}', [ContactController::class, 'destroy'])->name('kontak.destroy');

    // Admin: CRUD Project
    Route::resource('/admin/projects', ProjectController::class)->names('projects');
    
    // Admin: CRUD Blog
    Route::get('/admin/blog', [AdminPostController::class, 'index'])->name('admin.blog.index');
    Route::get('/admin/blog/create', [AdminPostController::class, 'create'])->name('admin.blog.create');
    Route::post('/admin/blog', [AdminPostController::class, 'store'])->name('admin.blog.store');
    Route::get('/admin/blog/{blog}/edit', [AdminPostController::class, 'edit'])->name('admin.blog.edit');
    Route::patch('/admin/blog/{blog}', [AdminPostController::class, 'update'])->name('admin.blog.update');
    Route::delete('/admin/blog/{blog}', [AdminPostController::class, 'destroy'])->name('admin.blog.destroy');

    // Profile user
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/skills', function () {
    return view('skill');
})->name('skills');

require __DIR__ . '/auth.php';

@extends('layouts.app')

@section('content')
<!-- Breadcrumb -->
<section class="py-4 bg-blue-50">
    <div class="max-w-4xl mx-auto px-4">
        <nav class="flex items-center space-x-2 text-sm">
            <a href="/" class="text-blue-600 hover:text-blue-800">Home</a>
            <i class="fas fa-chevron-right text-blue-400"></i>
            <a href="{{ route('blog.index') }}" class="text-blue-600 hover:text-blue-800">Blog</a>
            <i class="fas fa-chevron-right text-blue-400"></i>
            <span class="text-blue-800">{{ $post->judul }}</span>
        </nav>
    </div>
</section>

<!-- Article Header -->
<section class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4">
        <div class="text-center mb-8">
            <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800 mb-4">
                <i class="fas fa-tag mr-1"></i>
                Laravel
            </div>
            <h1 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">{{ $post->judul }}</h1>
            <div class="flex items-center justify-center space-x-6 text-blue-600 mb-6">
                <span><i class="fas fa-clock mr-1"></i>{{ ceil(str_word_count($post->konten) / 200) }} min read</span>
                <span><i class="fas fa-calendar mr-1"></i>{{ $post->created_at->format('F d, Y') }}</span>
                <span><i class="fas fa-user mr-1"></i>Rafly Juliano</span>
            </div>
        </div>
    </div>
</section>

<!-- Article Content -->
<section class="py-8 bg-white">
    <div class="max-w-4xl mx-auto px-4">
        <div class="prose prose-lg prose-blue max-w-none">
            {!! nl2br(e($post->konten)) !!}
        </div>
    </div>
</section>

<!-- Author Section -->
<section class="py-12 bg-blue-50">
    <div class="max-w-4xl mx-auto px-4">
        <div class="bg-white rounded-xl shadow-lg p-8">
            <div class="flex items-center mb-6">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-full flex items-center justify-center text-white text-xl font-bold mr-4">
                    RJ
                </div>
                <div>
                    <h3 class="text-xl font-bold text-blue-900">Rafly Juliano</h3>
                    <p class="text-blue-600">Full-Stack Web Developer</p>
                </div>
            </div>
            <p class="text-blue-700 leading-relaxed">
                Passionate web developer with experience in Laravel, PHP, and modern frontend technologies. 
                I love sharing knowledge and helping others learn web development through practical examples and real-world projects.
            </p>
        </div>
    </div>
</section>

<!-- Related Posts -->
@if($relatedPosts->count() > 0)
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-blue-900 mb-4">Related Articles</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-blue-700 mx-auto"></div>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            @foreach($relatedPosts as $relatedPost)
            <article class="group bg-white rounded-xl shadow-lg hover:shadow-xl hover-lift transition-all duration-300 overflow-hidden border border-blue-100">
                <div class="h-48 bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center">
                    <i class="fas fa-blog text-blue-600 text-4xl group-hover:scale-110 transition-transform duration-300"></i>
                </div>
                <div class="p-6">
                    <div class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800 mb-3">
                        <i class="fas fa-tag mr-1"></i>
                        Laravel
                    </div>
                    <h3 class="text-lg font-bold text-blue-900 mb-3 group-hover:text-blue-700 transition-colors duration-300">
                        {{ $relatedPost->judul }}
                    </h3>
                    <p class="text-blue-700 text-sm mb-4 line-clamp-3">
                        {{ Str::limit(strip_tags($relatedPost->konten), 100) }}
                    </p>
                    <div class="flex items-center justify-between text-sm text-blue-600 mb-4">
                        <span><i class="fas fa-clock mr-1"></i>{{ ceil(str_word_count($relatedPost->konten) / 200) }} min read</span>
                        <span><i class="fas fa-calendar mr-1"></i>{{ $relatedPost->created_at->format('M d') }}</span>
                    </div>
                    <a href="{{ route('blog.show', $relatedPost) }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold transition-colors duration-300">
                        <span>Read More</span>
                        <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Back to Blog Button -->
<section class="py-8 bg-blue-50">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <a href="{{ route('blog.index') }}" class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg transition-all duration-300 hover:scale-105 hover:shadow-lg">
            <i class="fas fa-arrow-left mr-2"></i>
            Back to All Articles
        </a>
    </div>
</section>

<style>
    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -moz-line-clamp: 3;
        line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .hover-lift:hover {
        transform: translateY(-5px);
    }
    
    .prose {
        color: #1e3a8a;
        line-height: 1.7;
    }
    
    .prose h1, .prose h2, .prose h3, .prose h4, .prose h5, .prose h6 {
        color: #1e40af;
        font-weight: 700;
        margin-top: 2rem;
        margin-bottom: 1rem;
    }
    
    .prose p {
        margin-bottom: 1.5rem;
    }
    
    .prose code {
        background-color: #f1f5f9;
        padding: 0.25rem 0.5rem;
        border-radius: 0.25rem;
        font-family: 'Courier New', monospace;
        font-size: 0.875rem;
    }
    
    .prose pre {
        background-color: #1e293b;
        color: #e2e8f0;
        padding: 1rem;
        border-radius: 0.5rem;
        overflow-x: auto;
        margin: 1.5rem 0;
    }
</style>
@endsection

@section('title', $post->judul . ' - Rafly Juliano')
@section('meta_description', Str::limit(strip_tags($post->konten), 160))
@section('og_title', $post->judul . ' - Rafly Juliano')
@section('og_description', Str::limit(strip_tags($post->konten), 160))

@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="py-20 bg-gradient-to-br from-blue-50 to-blue-100">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-blue-900 mb-6">Blog & Articles</h1>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-blue-700 mx-auto mb-6"></div>
            <p class="text-xl text-blue-700 max-w-3xl mx-auto mb-8">
                Sharing my journey in web development, technical insights, and learning experiences.
            </p>
        </div>
    </div>
</section>

<!-- Blog Posts Section -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        @if($posts->count() > 0)
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts as $post)
                <!-- Redesigned blog card -->
                <article class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-blue-100" data-category="{{ $post->category }}">
                    <div class="p-5 sm:p-6">
                        <div class="flex items-start justify-between mb-4">
                            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-[11px] font-semibold bg-blue-50 text-blue-700">
                                <i class="fas fa-tag text-blue-500"></i>
                                {{ $post->category_label }}
                            </span>
                            <div class="text-xs text-blue-500/80 flex items-center gap-3">
                                <span class="inline-flex items-center gap-1"><i class="fas fa-clock"></i>{{ ceil(str_word_count($post->konten) / 200) }} min</span>
                                <span class="inline-flex items-center gap-1"><i class="fas fa-calendar"></i>{{ $post->created_at->format('M d, Y') }}</span>
                            </div>
                        </div>

                        <h3 class="text-lg sm:text-xl font-extrabold text-blue-900 mb-2 sm:mb-3 leading-snug group-hover:text-blue-700 transition-colors">
                            {{ $post->judul }}
                        </h3>
                        <p class="text-blue-700/90 text-sm sm:text-[15px] mb-5 line-clamp-3">
                            {{ Str::limit(strip_tags($post->konten), 140) }}
                        </p>

                        <!-- Footer: author + action -->
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-full bg-gradient-to-br from-blue-500 to-blue-700 text-white flex items-center justify-center text-xs font-bold">RJ</div>
                                <div class="leading-tight">
                                    <p class="text-blue-900 text-sm font-semibold">Rafly Juliano</p>
                                    <p class="text-blue-600 text-xs">{{ $post->created_at->format('M d, Y') }}</p>
                                </div>
                            </div>
                            <a href="{{ route('blog.show', $post) }}" class="inline-flex items-center gap-2 text-blue-600 hover:text-white border border-blue-200 hover:bg-blue-600 px-3 py-2 rounded-lg text-sm font-semibold transition-all">
                                <span>Read More</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                <div class="flex justify-center">
                    {{ $posts->links() }}
                </div>
            </div>
        @else
            <!-- Empty State -->
            <div class="text-center py-16">
                <div class="bg-white rounded-xl shadow-lg border border-blue-100 p-12">
                    <i class="fas fa-blog text-blue-300 text-6xl mb-6"></i>
                    <h3 class="text-2xl font-bold text-blue-900 mb-4">No Blog Posts Yet</h3>
                    <p class="text-blue-700 mb-6 max-w-md mx-auto">I'm working on some interesting articles. Check back soon!</p>
                    <div class="inline-flex items-center px-6 py-3 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">
                        <i class="fas fa-clock mr-2"></i>
                        Coming Soon
                    </div>
                </div>
            </div>
        @endif
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
</style>
@endsection

@section('title', 'Blog - Rafly Juliano')
@section('meta_description', 'Blog articles about web development, Laravel, and programming insights by Rafly Juliano.')
@section('og_title', 'Blog - Rafly Juliano')
@section('og_description', 'Blog articles about web development, Laravel, and programming insights by Rafly Juliano.')

@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-white py-8">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-blue-900">Blog Management</h1>
                    <p class="text-blue-600 mt-1">Manage your blog posts and articles</p>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/dashboard" class="text-blue-600 hover:text-blue-800 transition-colors">
                        <i class="fas fa-arrow-left mr-2"></i>Back to Dashboard
                    </a>
                    <a href="{{ route('admin.blog.create') }}" 
                       class="bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl flex items-center">
                        <i class="fas fa-plus mr-2"></i>New Post
                    </a>
                </div>
            </div>
        </div>

        <!-- Success Message -->
        @if (session('success'))
            <div class="bg-green-50 border border-green-200 text-green-800 px-6 py-4 rounded-xl mb-6 flex items-center">
                <i class="fas fa-check-circle mr-3 text-green-600"></i>
                {{ session('success') }}
            </div>
        @endif

        <!-- Blog Posts -->
        <div class="bg-white rounded-xl shadow-lg border border-blue-100">
            @if ($posts->count() > 0)
                <div class="p-6">
                    <h2 class="text-xl font-bold text-blue-900 mb-6 flex items-center">
                        <i class="fas fa-blog mr-3 text-blue-600"></i>
                        Blog Posts ({{ $posts->count() }})
                    </h2>
                    
                    <div class="space-y-4">
                        @foreach ($posts as $post)
                            <div class="border border-blue-100 rounded-xl p-6 hover:border-blue-300 hover:shadow-md transition-all duration-300">
                                <div class="flex items-start justify-between">
                                    <div class="flex-1">
                                        <div class="flex items-center mb-3">
                                            <div class="w-3 h-3 bg-green-500 rounded-full mr-3"></div>
                                            <h3 class="text-xl font-bold text-blue-900">{{ $post->judul }}</h3>
                                        </div>
                                        
                                        <p class="text-blue-700 text-sm mb-4 line-clamp-2">
                                            {{ Str::limit($post->konten, 150) }}
                                        </p>
                                        
                                        <div class="flex items-center text-sm text-blue-600 mb-4">
                                            <i class="fas fa-calendar mr-2"></i>
                                            <span>Created: {{ $post->created_at->format('M d, Y') }}</span>
                                            @if($post->updated_at != $post->created_at)
                                                <span class="mx-3">•</span>
                                                <i class="fas fa-edit mr-2"></i>
                                                <span>Updated: {{ $post->updated_at->format('M d, Y') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center space-x-3 ml-6">
                                        <a href="{{ route('admin.blog.edit', $post) }}" 
                                           class="bg-blue-50 text-blue-600 px-4 py-2 rounded-lg hover:bg-blue-100 transition-colors flex items-center">
                                            <i class="fas fa-edit mr-2"></i>Edit
                                        </a>
                                        
                                        <form action="{{ route('admin.blog.destroy', $post) }}" method="POST" 
                                              onsubmit="return confirm('Are you sure you want to delete this post?')" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="bg-red-50 text-red-600 px-4 py-2 rounded-lg hover:bg-red-100 transition-colors flex items-center">
                                                <i class="fas fa-trash mr-2"></i>Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <!-- Empty State -->
                <div class="text-center py-16">
                    <div class="w-24 h-24 bg-blue-100 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <i class="fas fa-blog text-blue-400 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2">No Blog Posts Yet</h3>
                    <p class="text-blue-600 mb-6">Create your first blog post to get started</p>
                    <a href="{{ route('admin.blog.create') }}" 
                       class="bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition-all duration-300 inline-flex items-center">
                        <i class="fas fa-plus mr-2"></i>Create First Post
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
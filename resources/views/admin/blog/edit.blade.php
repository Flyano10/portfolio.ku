@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-white py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-blue-900">Edit Post</h1>
                    <p class="text-blue-600 mt-1">Update your blog article</p>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('admin.blog.index') }}" 
                       class="text-blue-600 hover:text-blue-800 transition-colors flex items-center">
                        <i class="fas fa-arrow-left mr-2"></i>Back to Blog
                    </a>
                </div>
            </div>
        </div>

        <!-- Post Info -->
        <div class="bg-blue-50 rounded-xl p-6 border border-blue-200 mb-8">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="w-3 h-3 bg-blue-500 rounded-full mr-3"></div>
                    <div>
                        <h3 class="font-semibold text-blue-900">Post Information</h3>
                        <p class="text-sm text-blue-600">
                            Created: {{ $post->created_at->format('M d, Y \a\t H:i') }}
                            @if($post->updated_at != $post->created_at)
                                • Last updated: {{ $post->updated_at->format('M d, Y \a\t H:i') }}
                            @endif
                        </p>
                    </div>
                </div>
                <div class="text-sm text-blue-600">
                    Post ID: {{ $post->id }}
                </div>
            </div>
        </div>

        <!-- Form -->
        <div class="bg-white rounded-xl shadow-lg border border-blue-100 p-8">
            <form action="{{ route('admin.blog.update', $post) }}" method="POST">
                @csrf
                @method('PATCH')
                
                <!-- Title Field -->
                <div class="mb-8">
                    <label for="judul" class="block text-sm font-semibold text-blue-900 mb-3">
                        <i class="fas fa-heading mr-2 text-blue-600"></i>Post Title
                    </label>
                    <input type="text" 
                           id="judul" 
                           name="judul" 
                           class="w-full px-4 py-3 border border-blue-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg @error('judul') border-red-500 @enderror"
                           placeholder="Enter your blog post title..."
                           value="{{ old('judul', $post->judul) }}"
                           required>
                    @error('judul')
                        <p class="text-red-500 text-sm mt-2 flex items-center">
                            <i class="fas fa-exclamation-circle mr-2"></i>{{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Category Field -->
                <div class="mb-8">
                    <label for="category" class="block text-sm font-semibold text-blue-900 mb-3">
                        <i class="fas fa-tags mr-2 text-blue-600"></i>Category
                    </label>
                    <select id="category"
                            name="category"
                            class="w-full px-4 py-3 border border-blue-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg @error('category') border-red-500 @enderror"
                            required>
                        <option value="" disabled>Select category</option>
                        @foreach($categories as $key => $label)
                            <option value="{{ $key }}" {{ old('category', $post->category) === $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <p class="text-red-500 text-sm mt-2 flex items-center">
                            <i class="fas fa-exclamation-circle mr-2"></i>{{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Content Field -->
                <div class="mb-8">
                    <label for="konten" class="block text-sm font-semibold text-blue-900 mb-3">
                        <i class="fas fa-align-left mr-2 text-blue-600"></i>Post Content
                    </label>
                    <textarea id="konten" 
                              name="konten" 
                              rows="15" 
                              class="w-full px-4 py-3 border border-blue-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('konten') border-red-500 @enderror"
                              placeholder="Write your blog post content here... You can use Markdown formatting."
                              required>{{ old('konten', $post->konten) }}</textarea>
                    @error('konten')
                        <p class="text-red-500 text-sm mt-2 flex items-center">
                            <i class="fas fa-exclamation-circle mr-2"></i>{{ $message }}
                        </p>
                    @enderror
                    <p class="text-blue-600 text-sm mt-2 flex items-center">
                        <i class="fas fa-info-circle mr-2"></i>
                        You can use Markdown formatting for rich text content.
                    </p>
                </div>

                <!-- Action Buttons -->
                <div class="flex items-center justify-between border-t border-blue-100 pt-6">
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('admin.blog.index') }}" 
                           class="px-6 py-3 border border-blue-300 text-blue-600 rounded-xl hover:bg-blue-50 transition-all duration-300 flex items-center">
                            <i class="fas fa-times mr-2"></i>Cancel
                        </a>
                        
                        <!-- Delete Button -->
                        <form action="{{ route('admin.blog.destroy', $post) }}" method="POST" 
                              onsubmit="return confirm('Are you sure you want to delete this post? This action cannot be undone.')" 
                              class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="px-6 py-3 bg-red-50 text-red-600 border border-red-200 rounded-xl hover:bg-red-100 transition-all duration-300 flex items-center">
                                <i class="fas fa-trash mr-2"></i>Delete Post
                            </button>
                        </form>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <button type="submit" 
                                class="bg-blue-600 text-white px-8 py-3 rounded-xl hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl flex items-center">
                            <i class="fas fa-save mr-2"></i>Update Post
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Editing Tips -->
        <div class="mt-8 bg-blue-50 rounded-xl p-6 border border-blue-100">
            <h3 class="text-lg font-bold text-blue-900 mb-4 flex items-center">
                <i class="fas fa-lightbulb mr-3 text-blue-600"></i>Editing Tips
            </h3>
            <div class="grid md:grid-cols-2 gap-4 text-sm text-blue-700">
                <div class="flex items-start">
                    <i class="fas fa-check text-green-500 mr-2 mt-1 text-xs"></i>
                    <span>Review your content for clarity and flow</span>
                </div>
                <div class="flex items-start">
                    <i class="fas fa-check text-green-500 mr-2 mt-1 text-xs"></i>
                    <span>Check for spelling and grammar errors</span>
                </div>
                <div class="flex items-start">
                    <i class="fas fa-check text-green-500 mr-2 mt-1 text-xs"></i>
                    <span>Update content with latest information</span>
                </div>
                <div class="flex items-start">
                    <i class="fas fa-check text-green-500 mr-2 mt-1 text-xs"></i>
                    <span>Consider adding new examples or insights</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
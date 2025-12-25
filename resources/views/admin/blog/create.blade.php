@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-white py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-blue-900">Create New Post</h1>
                    <p class="text-blue-600 mt-1">Write and publish a new blog article</p>
                </div>
                <a href="{{ route('admin.blog.index') }}" 
                   class="text-blue-600 hover:text-blue-800 transition-colors flex items-center">
                    <i class="fas fa-arrow-left mr-2"></i>Back to Blog
                </a>
            </div>
        </div>

        <!-- Form -->
        <div class="bg-white rounded-xl shadow-lg border border-blue-100 p-8">
            <form action="{{ route('admin.blog.store') }}" method="POST">
                @csrf
                
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
                           value="{{ old('judul') }}"
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
                        <option value="" disabled {{ old('category') ? '' : 'selected' }}>Select category</option>
                        @foreach($categories as $key => $label)
                            <option value="{{ $key }}" {{ old('category') === $key ? 'selected' : '' }}>{{ $label }}</option>
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
                              required>{{ old('konten') }}</textarea>
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
                    <a href="{{ route('admin.blog.index') }}" 
                       class="px-6 py-3 border border-blue-300 text-blue-600 rounded-xl hover:bg-blue-50 transition-all duration-300 flex items-center">
                        <i class="fas fa-times mr-2"></i>Cancel
                    </a>
                    
                    <div class="flex items-center space-x-4">
                        <button type="submit" 
                                class="bg-blue-600 text-white px-8 py-3 rounded-xl hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl flex items-center">
                            <i class="fas fa-save mr-2"></i>Publish Post
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Writing Tips -->
        <div class="mt-8 bg-blue-50 rounded-xl p-6 border border-blue-100">
            <h3 class="text-lg font-bold text-blue-900 mb-4 flex items-center">
                <i class="fas fa-lightbulb mr-3 text-blue-600"></i>Writing Tips
            </h3>
            <div class="grid md:grid-cols-2 gap-4 text-sm text-blue-700">
                <div class="flex items-start">
                    <i class="fas fa-check text-green-500 mr-2 mt-1 text-xs"></i>
                    <span>Use clear, engaging titles that describe your content</span>
                </div>
                <div class="flex items-start">
                    <i class="fas fa-check text-green-500 mr-2 mt-1 text-xs"></i>
                    <span>Break up long content with headers and paragraphs</span>
                </div>
                <div class="flex items-start">
                    <i class="fas fa-check text-green-500 mr-2 mt-1 text-xs"></i>
                    <span>Include practical examples and code snippets</span>
                </div>
                <div class="flex items-start">
                    <i class="fas fa-check text-green-500 mr-2 mt-1 text-xs"></i>
                    <span>Proofread before publishing for the best experience</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
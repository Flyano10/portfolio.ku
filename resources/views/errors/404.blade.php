@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-white">
    <div class="max-w-2xl mx-auto px-4 text-center">
        <div class="mb-8" data-aos="fade-up">
            <div class="w-32 h-32 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-exclamation-triangle text-4xl text-blue-600"></i>
            </div>
            <h1 class="text-6xl md:text-8xl font-bold text-blue-900 mb-4">404</h1>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-blue-700 mx-auto mb-6"></div>
            <h2 class="text-3xl font-bold text-blue-900 mb-4">Page Not Found</h2>
            <p class="text-xl text-blue-700 mb-8">The page you're looking for doesn't exist or has been moved.</p>
        </div>
        
        <div class="space-y-4" data-aos="fade-up" data-aos-delay="200">
            <a href="/" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full font-semibold shadow-lg hover:shadow-xl transition-all duration-200">
                <i class="fas fa-home mr-2"></i>
                Back to Home
            </a>
            <div class="text-blue-600">
                <a href="{{ route('about') }}" class="hover:text-blue-800 transition-colors">About Me</a> • 
                <a href="{{ route('skills') }}" class="hover:text-blue-800 transition-colors">Skills</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('title', '404 - Page Not Found')
@section('meta_description', 'Page not found - The page you are looking for does not exist.')

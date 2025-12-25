@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-white">
    <div class="max-w-2xl mx-auto px-4 text-center">
        <div class="mb-8" data-aos="fade-up">
            <div class="w-32 h-32 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-server text-4xl text-red-600"></i>
            </div>
            <h1 class="text-6xl md:text-8xl font-bold text-red-900 mb-4">500</h1>
            <div class="w-24 h-1 bg-gradient-to-r from-red-500 to-red-700 mx-auto mb-6"></div>
            <h2 class="text-3xl font-bold text-red-900 mb-4">Server Error</h2>
            <p class="text-xl text-red-700 mb-8">Something went wrong on our end. Please try again later.</p>
        </div>
        
        <div class="space-y-4" data-aos="fade-up" data-aos-delay="200">
            <a href="/" class="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-full font-semibold shadow-lg hover:shadow-xl transition-all duration-200">
                <i class="fas fa-home mr-2"></i>
                Back to Home
            </a>
            <div class="text-red-600">
                <a href="{{ route('about') }}" class="hover:text-red-800 transition-colors">About Me</a> • 
                <a href="{{ route('skills') }}" class="hover:text-red-800 transition-colors">Skills</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('title', '500 - Server Error')
@section('meta_description', 'Server error - Something went wrong on our end.')

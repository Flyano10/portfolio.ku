
@extends('layouts.app')

@section('title', 'Rafly Juliano - Full-Stack Web Developer | Portfolio')
@section('meta_description', 'Portfolio of Rafly Juliano, a passionate full-stack web developer specializing in Laravel, PHP, MySQL, and modern web technologies. View my projects, skills, and get in touch!')
@section('meta_keywords', 'Rafly Juliano, Web Developer, Full-Stack Developer, Laravel, PHP, MySQL, Portfolio, Projects, Skills, Contact')
@section('meta_author', 'Rafly Juliano')
@section('og_title', 'Rafly Juliano - Full-Stack Web Developer | Portfolio')
@section('og_description', 'Portfolio of Rafly Juliano, a passionate full-stack web developer specializing in Laravel, PHP, MySQL, and modern web technologies. View my projects, skills, and get in touch!')
@section('og_image', asset('images/rafly.jpg.jpeg'))

@section('content')
    <!-- HERO SECTION -->
    <style>
    @keyframes spin-border {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    .profile-border-animate {
      position: absolute;
      top: -10px; left: -10px; right: -10px; bottom: -10px;
      border-radius: 9999px;
      border: 4px solid #3b82f6;
      opacity: 0.3;
      z-index: 1;
      animation: spin-border 3s linear infinite;
    }
    @keyframes bounce-scale {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.12); }
    }
    .group:hover .profile-bounce {
      animation: bounce-scale 0.5s;
    }
    .tooltip {
      position: absolute;
      bottom: 120%;
      left: 50%;
      transform: translateX(-50%);
      background: #1e293b;
      color: #fff;
      padding: 4px 10px;
      border-radius: 6px;
      font-size: 0.85rem;
      white-space: nowrap;
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.2s;
    }
    .group:hover .tooltip { opacity: 1; }
    @media (max-width: 640px) {
      .profile-border-animate { top: -4px; left: -4px; right: -4px; bottom: -4px; }
      .tooltip { display: none; }
    }
    </style>
    <!-- Background Shape SVG Atas -->
    <div class="absolute top-0 left-0 w-full overflow-hidden pointer-events-none" style="z-index:0;">
      <svg viewBox="0 0 1440 320" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-32 md:h-48">
        <defs>
          <linearGradient id="heroGrad1" x1="0" y1="0" x2="0" y2="1">
            <stop offset="0%" stop-color="#3b82f6" stop-opacity="0.15" />
            <stop offset="100%" stop-color="#fff" stop-opacity="0" />
          </linearGradient>
        </defs>
        <path fill="url(#heroGrad1)" d="M0,64L80,101.3C160,139,320,213,480,218.7C640,224,800,160,960,122.7C1120,85,1280,75,1360,69.3L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z" />
      </svg>
        </div>
    <section id="hero" class="relative min-h-screen flex flex-col items-center justify-center bg-white text-blue-900 py-16" data-aos="fade-up">
        <div class="flex flex-col md:flex-row items-center gap-10 md:gap-10 gap-8 w-full max-w-5xl mx-auto px-4">
            <!-- Profile Photo -->
            <div class="flex-shrink-0 group relative mb-6 md:mb-4 flex flex-col items-center">
                <span class="profile-border-animate"></span>
                <div class="absolute inset-0 rounded-full bg-blue-400 opacity-30 blur-2xl animate-pulse z-0"></div>
                <img src="{{ asset('images/rafly.jpg.jpeg') }}" alt="Foto Rafly" class="profile-bounce w-40 h-40 rounded-full shadow-lg border-4 border-blue-200 object-cover relative z-10 transition-transform duration-300 group-hover:scale-110 group-hover:-rotate-3">
            </div>
            <!-- Social Media Icon -->
            <div class="flex justify-center gap-8 mb-8 md:mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="relative group">
                    <a href="https://github.com/raflyjuliano" target="_blank" class="text-blue-600 hover:text-black text-3xl transition-all duration-300 hover:scale-125 active:scale-110 group-hover:bg-gray-100 group-hover:rounded-full group-hover:p-2">
                        <i class="fab fa-github group-hover:scale-110 transition-transform duration-300"></i>
                    </a>
                    <span class="tooltip">GitHub</span>
                </div>
                <div class="relative group">
                    <a href="https://linkedin.com/in/raflyjuliano" target="_blank" class="text-blue-600 hover:text-[#0A66C2] text-3xl transition-all duration-300 hover:scale-125 active:scale-110 group-hover:bg-blue-100 group-hover:rounded-full group-hover:p-2">
                        <i class="fab fa-linkedin group-hover:scale-110 transition-transform duration-300"></i>
                    </a>
                    <span class="tooltip">LinkedIn</span>
                </div>
                <div class="relative group">
                    <a href="mailto:raflyjuliano62@gmail.com" class="text-blue-600 hover:text-[#EA4335] text-3xl transition-all duration-300 hover:scale-125 active:scale-110 group-hover:bg-red-100 group-hover:rounded-full group-hover:p-2">
                        <i class="fas fa-envelope group-hover:scale-110 transition-transform duration-300"></i>
                    </a>
                    <span class="tooltip">Email</span>
                </div>
            </div>
            <!-- Intro -->
            <div class="text-center md:text-left flex-1 flex flex-col gap-4 md:gap-2">
                <h1 id="heroTitle" class="text-3xl sm:text-4xl md:text-5xl font-bold mb-2" data-aos="fade-right" data-aos-delay="300">Hi, I'm <span class="text-blue-600">Rafly</span></h1>
                <h2 id="heroSubtitle" class="text-xl sm:text-2xl md:text-3xl font-semibold text-blue-600 mb-4" data-aos="fade-right" data-aos-delay="400">Full-Stack Web Developer</h2>
                <p id="heroDescription" class="text-base sm:text-lg text-blue-800 mb-6" data-aos="fade-right" data-aos-delay="500">Passionate developer creating modern, scalable web applications with Laravel, PHP, and cutting-edge technologies. Ready to bring your ideas to life!</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start mb-6 md:mb-0">
                    <a id="viewProjectsBtn" href="#projects" class="bg-blue-600 hover:bg-blue-700 hover:scale-105 hover:shadow-lg transition-transform duration-200 text-white px-6 py-3 rounded-full font-semibold shadow">View Projects</a>
                    <a id="downloadCvBtn" href="{{ asset('cv/CV-Raflyjuliano..pdf') }}" download class="border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white hover:scale-105 hover:shadow-lg transition-transform duration-200 px-6 py-3 rounded-full font-semibold">Download CV</a>
                </div>
            </div>
        </div>
        <!-- Scroll Down Indicator -->
        <div class="absolute left-1/2 bottom-8 transform -translate-x-1/2 flex flex-col items-center animate-bounce" style="z-index:2;">
          <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
          <span id="scrollDownText" class="text-xs text-blue-400 mt-1">Scroll Down</span>
        </div>
    </section>
    <!-- Background Shape SVG Bawah -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden pointer-events-none" style="z-index:0;">
      <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-24 md:h-32">
            <defs>
          <linearGradient id="heroGrad2" x1="0" y1="0" x2="0" y2="1">
            <stop offset="0%" stop-color="#3b82f6" stop-opacity="0.10" />
            <stop offset="100%" stop-color="#fff" stop-opacity="0" />
                </linearGradient>
            </defs>
        <path fill="url(#heroGrad2)" fill-opacity="1" d="M0,32L60,37.3C120,43,240,53,360,69.3C480,85,600,107,720,112C840,117,960,107,1080,90.7C1200,75,1320,53,1380,42.7L1440,32L1440,120L1380,120C1320,120,1200,120,1080,120C960,120,840,120,720,120C600,120,480,120,360,120C240,120,120,120,60,120L0,120Z" />
        </svg>
    </div>

    <!-- WHY CHOOSE ME SECTION -->
    <section class="py-20 bg-white" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-up" data-aos-delay="200">
                <h2 id="whyChooseMeTitle" class="text-4xl font-bold text-blue-900 mb-4">Why Choose Me?</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-blue-700 mx-auto mb-4"></div>
                <p id="whyChooseMeDesc" class="text-lg text-blue-700 max-w-2xl mx-auto">
                    I bring a unique combination of technical expertise, creative problem-solving, and dedication to every project.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="group text-center p-6 bg-blue-50 rounded-xl hover:bg-green-50 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-500 transition-colors duration-300">
                        <i class="fas fa-code text-white text-2xl group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <h3 id="cleanCodeTitle" class="text-xl font-bold text-blue-900 mb-2">Clean Code</h3>
                    <p id="cleanCodeDesc" class="text-blue-700">Writing maintainable, scalable, and well-documented code that follows industry best practices.</p>
                </div>
                <div class="group text-center p-6 bg-blue-50 rounded-xl hover:bg-orange-50 transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-orange-500 transition-colors duration-300">
                        <i class="fas fa-rocket text-white text-2xl group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <h3 id="fastDeliveryTitle" class="text-xl font-bold text-blue-900 mb-2">Fast Delivery</h3>
                    <p id="fastDeliveryDesc" class="text-blue-700">Efficient development process with quick turnaround times without compromising quality.</p>
                </div>
                <div class="group text-center p-6 bg-blue-50 rounded-xl hover:bg-pink-50 transition-all duration-300" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-pink-500 transition-colors duration-300">
                        <i class="fas fa-heart text-white text-2xl group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <h3 id="passionateTitle" class="text-xl font-bold text-blue-900 mb-2">Passionate</h3>
                    <p id="passionateDesc" class="text-blue-700">Genuine passion for web development and continuous learning of new technologies.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECTS SECTION -->
    <section id="projects" class="py-20 bg-blue-50" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 id="featuredProjectsTitle" class="text-4xl font-bold text-blue-900 mb-4">Featured Projects</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-blue-700 mx-auto mb-4"></div>
                <p id="featuredProjectsDesc" class="text-lg text-blue-700 max-w-2xl mx-auto">
                    Here are some of my recent projects that showcase my skills and creativity in web development.
                </p>
            </div>
            @if($projects->count() > 0)
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($projects as $project)
                        <div class="group bg-white rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-300 overflow-hidden border border-blue-100">
                            <!-- Project Screenshot with Clickable Link -->
                            <div class="h-48 bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center relative overflow-hidden">
                                @if($project->screenshot)
                                    <img src="{{ Storage::url($project->screenshot) }}" alt="{{ $project->judul }}" 
                                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                @else
                                    <svg class="w-16 h-16 text-blue-400 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                @endif
                                <!-- Overlay with project info and clickable link -->
                                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                    <div class="text-white text-center">
                                        @if($project->demo_url)
                                            <a href="{{ $project->demo_url }}" target="_blank" class="block">
                                                <p class="text-sm font-medium">Click to view live demo</p>
                                            </a>
                                        @elseif($project->github_url)
                                            <a href="{{ $project->github_url }}" target="_blank" class="block">
                                                <p class="text-sm font-medium">Click to view on GitHub</p>
                                            </a>
                                        @else
                                            <p class="text-sm font-medium">Project details</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Project Content -->
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-blue-900 mb-2 group-hover:text-blue-600 transition-colors">
                                    {{ $project->judul }}
                                </h3>
                                <p class="text-blue-700 mb-4 line-clamp-3">{{ $project->deskripsi }}</p>
                                
                                <!-- Tech Stack Badges -->
                                <div class="flex flex-wrap gap-2 mb-4">
                                    @if($project->tech_stack && is_array($project->tech_stack))
                                        @foreach(array_slice($project->tech_stack, 0, 4) as $tech)
                                            <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs rounded-full font-medium">{{ $tech }}</span>
                                        @endforeach
                                    @else
                                        <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs rounded-full font-medium">Laravel</span>
                                        <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs rounded-full font-medium">Tailwind CSS</span>
                                        <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs rounded-full font-medium">PHP</span>
                                    @endif
                                </div>
                                
                                <!-- Project Links -->
                                <div class="flex gap-2">
                                    @if($project->demo_url)
                                        <a href="{{ $project->demo_url }}" target="_blank" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white text-center py-2 px-4 rounded-lg text-sm font-medium transition-colors duration-200 group">
                                            <i class="fas fa-external-link-alt mr-2 group-hover:scale-110 transition-transform duration-300"></i>Live Demo
                                        </a>
                                    @else
                                        <span class="flex-1 bg-gray-300 text-gray-500 text-center py-2 px-4 rounded-lg text-sm font-medium cursor-not-allowed">
                                            <i class="fas fa-external-link-alt mr-2"></i>No Demo
                                        </span>
                                    @endif
                                    
                                    @if($project->github_url)
                                        <a href="{{ $project->github_url }}" target="_blank" class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 text-center py-2 px-4 rounded-lg text-sm font-medium transition-colors duration-200 group">
                                            <i class="fab fa-github mr-2 group-hover:scale-110 transition-transform duration-300"></i>GitHub
                                        </a>
                                    @else
                                        <span class="flex-1 bg-gray-300 text-gray-500 text-center py-2 px-4 rounded-lg text-sm font-medium cursor-not-allowed">
                                            <i class="fab fa-github mr-2"></i>No Repo
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <div class="text-center mt-12">
                    <a href="{{ route('projects.index') }}" 
                        class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 hover:scale-105 hover:shadow-lg transition-all duration-200 text-white px-8 py-3 rounded-full font-semibold shadow">
                        <span>View All Projects</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            @else
                <div class="text-center py-12">
                    <div class="w-24 h-24 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-blue-800 mb-2">No Projects Yet</h3>
                    <p class="text-blue-600">Projects will be displayed here once added.</p>
                </div>
            @endif
        </div>
        </section>

    <!-- SERVICES SECTION -->
    <section class="py-20 bg-gradient-to-br from-blue-600 to-blue-800 text-white" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-up" data-aos-delay="200">
                <h2 id="servicesTitle" class="text-4xl font-bold mb-4">Services I Offer</h2>
                <div class="w-24 h-1 bg-white mx-auto mb-4"></div>
                <p id="servicesDesc" class="text-xl text-blue-100 max-w-2xl mx-auto">
                    Comprehensive web development solutions tailored to your business needs
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="group bg-white/10 backdrop-blur-sm rounded-xl p-6 text-center hover:bg-white/20 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-blue-500 transition-colors duration-300">
                        <i class="fas fa-laptop-code text-2xl group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <h3 id="webDevTitle" class="text-xl font-bold mb-2">Web Development</h3>
                    <p id="webDevDesc" class="text-blue-100">Custom websites and web applications built with modern technologies</p>
                </div>
                <div class="group bg-white/10 backdrop-blur-sm rounded-xl p-6 text-center hover:bg-white/20 transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-500 transition-colors duration-300">
                        <i class="fas fa-mobile-alt text-2xl group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <h3 id="responsiveTitle" class="text-xl font-bold mb-2">Responsive Design</h3>
                    <p id="responsiveDesc" class="text-blue-100">Mobile-first approach ensuring perfect experience across all devices</p>
                </div>
                <div class="group bg-white/10 backdrop-blur-sm rounded-xl p-6 text-center hover:bg-white/20 transition-all duration-300" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-orange-500 transition-colors duration-300">
                        <i class="fas fa-database text-2xl group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <h3 id="backendTitle" class="text-xl font-bold mb-2">Backend Development</h3>
                    <p id="backendDesc" class="text-blue-100">Robust server-side solutions with Laravel and PHP</p>
                </div>
                <div class="group bg-white/10 backdrop-blur-sm rounded-xl p-6 text-center hover:bg-white/20 transition-all duration-300" data-aos="fade-up" data-aos-delay="600">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-500 transition-colors duration-300">
                        <i class="fas fa-search text-2xl group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <h3 id="seoTitle" class="text-xl font-bold mb-2">SEO Optimization</h3>
                    <p id="seoDesc" class="text-blue-100">Search engine optimization for better visibility and ranking</p>
                </div>
                <div class="group bg-white/10 backdrop-blur-sm rounded-xl p-6 text-center hover:bg-white/20 transition-all duration-300" data-aos="fade-up" data-aos-delay="700">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-yellow-500 transition-colors duration-300">
                        <i class="fas fa-tools text-2xl group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <h3 id="maintenanceTitle" class="text-xl font-bold mb-2">Maintenance</h3>
                    <p id="maintenanceDesc" class="text-blue-100">Ongoing support and maintenance for your web applications</p>
                </div>
                <div class="group bg-white/10 backdrop-blur-sm rounded-xl p-6 text-center hover:bg-white/20 transition-all duration-300" data-aos="fade-up" data-aos-delay="800">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-cyan-500 transition-colors duration-300">
                        <i class="fas fa-lightbulb text-2xl group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <h3 id="consultationTitle" class="text-xl font-bold mb-2">Consultation</h3>
                    <p id="consultationDesc" class="text-blue-100">Technical advice and guidance for your digital projects</p>
                </div>
            </div>
        </div>
    </section>


    <!-- BLOG SECTION -->
    <section id="blog" class="py-20 bg-blue-50" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 id="blogTitle" class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Blog & Articles</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-blue-700 mx-auto mb-4"></div>
                <p id="blogDesc" class="text-lg text-blue-700 max-w-2xl mx-auto mb-8">
                    Sharing my journey in web development, technical insights, and learning experiences.
                </p>
                
                <!-- Category Filter Buttons -->
                <div class="flex flex-wrap justify-center gap-3 mb-8">
                    <button id="filterAll" class="category-filter active bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-medium hover:bg-blue-700 transition-colors duration-300" data-category="all">
                        <i class="fas fa-th mr-1"></i>All
                    </button>
                    <button id="filterLaravel" class="category-filter bg-white text-blue-600 border border-blue-200 px-4 py-2 rounded-full text-sm font-medium hover:bg-blue-50 transition-colors duration-300" data-category="laravel">
                        <i class="fas fa-code mr-1"></i>Laravel
                    </button>
                    <button id="filterMysql" class="category-filter bg-white text-blue-600 border border-blue-200 px-4 py-2 rounded-full text-sm font-medium hover:bg-blue-50 transition-colors duration-300" data-category="mysql">
                        <i class="fas fa-database mr-1"></i>MySQL
                    </button>
                    <button id="filterFrontend" class="category-filter bg-white text-blue-600 border border-blue-200 px-4 py-2 rounded-full text-sm font-medium hover:bg-blue-50 transition-colors duration-300" data-category="frontend">
                        <i class="fas fa-paint-brush mr-1"></i>Frontend
                    </button>
                    <button id="filterCareer" class="category-filter bg-white text-blue-600 border border-blue-200 px-4 py-2 rounded-full text-sm font-medium hover:bg-blue-50 transition-colors duration-300" data-category="career">
                        <i class="fas fa-rocket mr-1"></i>Career
                    </button>
                </div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($posts as $index => $post)
                <!-- Dynamic Blog Post (Redesigned Card) -->
                <article class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-blue-100 blog-article" data-category="{{ $post->category }}" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                    <div class="p-5 sm:p-6">
                        <div class="flex items-start justify-between mb-4">
                            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-[11px] font-semibold bg-blue-50 text-blue-700">
                                <i class="fas fa-tag text-blue-500"></i>
                                {{ $post->category_label }}
                            </span>
                            <div class="text-xs text-blue-500/80 flex items-center gap-3">
                                <span class="inline-flex items-center gap-1"><i class="fas fa-clock"></i>{{ ceil(str_word_count($post->konten) / 200) }} min</span>
                                <span class="inline-flex items-center gap-1"><i class="fas fa-calendar"></i>{{ $post->created_at->format('M Y') }}</span>
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
                            <a href="#" data-post-id="{{ $post->id }}" class="js-readmore inline-flex items-center gap-2 text-blue-600 hover:text-white border border-blue-200 hover:bg-blue-600 px-3 py-2 rounded-lg text-sm font-semibold transition-all">
                                <span>Read More</span>
                                <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                            </a>
                        </div>
                    </div>

                </article>
                @empty
                <!-- Empty State -->
                <div class="col-span-full text-center py-12">
                    <div class="bg-white rounded-xl shadow-lg border border-blue-100 p-8">
                        <i class="fas fa-blog text-blue-300 text-6xl mb-4"></i>
                        <h3 class="text-xl font-bold text-blue-900 mb-2">No Blog Posts Yet</h3>
                        <p class="text-blue-700 mb-4">I'm working on some interesting articles. Check back soon!</p>
                        <div class="inline-flex items-center px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">
                            <i class="fas fa-clock mr-2"></i>
                            Coming Soon
                        </div>
                    </div>
                </div>
                @endforelse

            </div>

            @if($posts->count() > 0)
            <div class="text-center mt-12">
                <a href="{{ route('blog.index') }}" class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg transition-all duration-300 hover:scale-105 hover:shadow-lg">
                    <i class="fas fa-newspaper mr-2"></i>View All Articles
                </a>
            </div>
            @endif
        </div>
    </section>

    <!-- Article Detail Modal -->
    <div id="articleDetailModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-xl shadow-2xl max-w-5xl w-full max-h-[95vh] overflow-hidden">
                <!-- Modal Header -->
                <div class="bg-gradient-to-r from-blue-600 to-blue-700 text-white p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-500 text-white mb-2">
                                <i class="fas fa-tag mr-1"></i>
                                <span id="modalCategory">Laravel</span>
                            </div>
                            <h2 id="modalTitle" class="text-2xl font-bold mb-2">Article Title</h2>
                            <div class="flex items-center space-x-4 text-blue-100">
                                <span><i class="fas fa-clock mr-1"></i><span id="modalReadTime">5 min read</span></span>
                                <span><i class="fas fa-calendar mr-1"></i><span id="modalDate">Dec 2024</span></span>
                                <span><i class="fas fa-user mr-1"></i>Rafly Juliano</span>
                            </div>
                        </div>
                        <button onclick="closeArticleDetailModal()" class="text-white hover:text-blue-200 transition-colors duration-300">
                            <i class="fas fa-times text-2xl"></i>
                        </button>
                    </div>
                </div>

                <!-- Modal Content -->
                <div class="p-6 overflow-y-auto max-h-[80vh] pr-3 overscroll-contain">
                    <div id="modalContent" class="prose prose-lg prose-blue max-w-none pb-8">
                        <!-- Article content will be loaded here -->
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="bg-gray-50 px-6 py-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-700 rounded-full flex items-center justify-center text-white text-sm font-bold mr-3">
                                RJ
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900">Rafly Juliano</p>
                                <p class="text-sm text-gray-600">Full-Stack Web Developer</p>
                            </div>
                        </div>
                        <div class="flex space-x-3">
                            <a href="#" id="modalFullArticleLink" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200">
                                <i class="fas fa-external-link-alt mr-1"></i>Read Full Article
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTACT SECTION -->
    <section id="contact" class="py-20 bg-white text-blue-900" data-aos="fade-up">
        <div class="max-w-4xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 id="contactTitle" class="text-3xl md:text-4xl font-bold mb-2">Let's Work Together</h2>
                <p id="contactDesc" class="text-blue-700">Ready to start your next project? Let's discuss how I can help bring your ideas to life!</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="group text-center p-6 bg-blue-50 rounded-xl hover:bg-red-50 hover-lift transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-red-500 transition-colors duration-300">
                        <i class="fas fa-envelope text-white text-2xl group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2">Email</h3>
                    <p class="text-blue-700 mb-4">raflyjuliano62@gmail.com</p>
                    <a href="mailto:raflyjuliano62@gmail.com" class="text-blue-600 hover:text-red-600 font-semibold transition-colors duration-300">Send Email</a>
                </div>

                <div class="group text-center p-6 bg-blue-50 rounded-xl hover:bg-green-50 hover-lift transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-600 transition-colors duration-300">
                        <i class="fab fa-whatsapp text-white text-2xl group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2">WhatsApp</h3>
                    <p class="text-blue-700 mb-4 group-hover:text-green-700 transition-colors duration-300">wa.me/6281315138181</p>
                    <a href="https://wa.me/6281315138181" target="_blank" class="text-blue-600 group-hover:text-green-700 font-semibold transition-colors duration-300">Chat on WhatsApp</a>
                </div>

                <div class="group text-center p-6 bg-blue-50 rounded-xl hover:bg-blue-100 hover-lift transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-blue-700 transition-colors duration-300">
                        <i class="fab fa-linkedin text-white text-2xl group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2">LinkedIn</h3>
                    <p class="text-blue-700 mb-4">linkedin.com/in/raflyjuliano</p>
                    <a href="https://linkedin.com/in/raflyjuliano" target="_blank" class="text-blue-600 hover:text-blue-800 font-semibold transition-colors duration-300">Connect</a>
                </div>
            </div>

            <div class="text-center">
                <a id="sendMessageBtn" href="{{ route('contact') }}" class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg transition-all duration-300 hover:scale-105 hover:shadow-lg">
                    <i class="fas fa-paper-plane mr-2"></i>Send a Message
                </a>
            </div>
        </div>
    </section>

        <!-- FOOTER -->
    <footer class="bg-blue-900 text-white py-10">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h3 class="text-2xl font-bold mb-2">Rafly Juliano</h3>
            <p class="text-blue-200 mb-4">Web Developer</p>
            <div class="flex justify-center gap-6 text-2xl mb-6">
                <a href="https://github.com/raflyjuliano" target="_blank" class="hover:text-black transition"><i class="fab fa-github"></i></a>
                <a href="https://linkedin.com/in/raflyjuliano" target="_blank" class="hover:text-[#0A66C2] transition"><i class="fab fa-linkedin"></i></a>
                <a href="mailto:raflyjuliano62@gmail.com" class="hover:text-[#EA4335] transition"><i class="fas fa-envelope"></i></a>
            </div>
            <div class="border-t border-blue-700 pt-6">
                <p class="text-blue-200">&copy; {{ date('Y') }} Rafly Juliano. All rights reserved.</p>
                <p id="footerMadeWith" class="text-sm text-blue-300 mt-2">Built with Laravel & Tailwind CSS</p>
            </div>
        </div>
    </footer>


    <!-- Blog posts data -->
    <script type="application/json" id="blog-posts-data">@json($posts->keyBy('id'))</script>
    
    <!-- Blog Filter JavaScript -->
    <script>
        
        // Article data
        const articles = {
            'laravel-basics': {
                title: 'Getting Started with Laravel 11',
                category: 'Laravel',
                date: 'Dec 2024',
                readTime: '5 min read',
                content: `
                    <div class="prose max-w-none">
                        <div class="flex items-center gap-4 mb-6 text-sm text-blue-600">
                            <span><i class="fas fa-tag mr-1"></i>Laravel</span>
                            <span><i class="fas fa-clock mr-1"></i>5 min read</span>
                            <span><i class="fas fa-calendar mr-1"></i>Dec 2024</span>
                        </div>
                        
                        <p class="text-lg text-blue-700 mb-6">Laravel 11 brings exciting new features and improvements that make PHP development even more enjoyable. In this comprehensive guide, I'll walk you through everything you need to know to get started.</p>
                        
                        <h3 class="text-xl font-bold text-blue-900 mb-4">What's New in Laravel 11</h3>
                        <ul class="list-disc pl-6 mb-6 text-blue-700">
                            <li><strong>Improved Performance:</strong> Up to 30% faster than Laravel 10</li>
                            <li><strong>New Artisan Commands:</strong> Enhanced development workflow</li>
                            <li><strong>Better Error Handling:</strong> More intuitive debugging experience</li>
                            <li><strong>Enhanced Security:</strong> Latest security patches and improvements</li>
                        </ul>
                        
                        <h3 class="text-xl font-bold text-blue-900 mb-4">Getting Started</h3>
                        <p class="text-blue-700 mb-4">To create a new Laravel 11 project, use the following command:</p>
                        <div class="bg-gray-100 p-4 rounded-lg mb-6">
                            <code class="text-sm">composer create-project laravel/laravel my-app</code>
                        </div>
                        
                        <h3 class="text-xl font-bold text-blue-900 mb-4">Key Features to Explore</h3>
                        <p class="text-blue-700 mb-4">Laravel 11 introduces several powerful features that will enhance your development experience:</p>
                        <ul class="list-disc pl-6 mb-6 text-blue-700">
                            <li>Enhanced Eloquent relationships</li>
                            <li>Improved Blade templating</li>
                            <li>Better API development tools</li>
                            <li>Advanced caching mechanisms</li>
                        </ul>
                        
                        <div class="bg-blue-50 p-6 rounded-lg mt-8">
                            <h4 class="font-bold text-blue-900 mb-2">💡 Pro Tip</h4>
                            <p class="text-blue-700">Start with Laravel's built-in authentication system and gradually explore more advanced features as you become comfortable with the framework.</p>
                        </div>
                    </div>
                `
            },
            'mysql-optimization': {
                title: 'MySQL Database Optimization',
                category: 'MySQL',
                date: 'Nov 2024',
                readTime: '7 min read',
                content: `
                    <div class="prose max-w-none">
                        <div class="flex items-center gap-4 mb-6 text-sm text-blue-600">
                            <span><i class="fas fa-tag mr-1"></i>MySQL</span>
                            <span><i class="fas fa-clock mr-1"></i>7 min read</span>
                            <span><i class="fas fa-calendar mr-1"></i>Nov 2024</span>
                        </div>
                        
                        <p class="text-lg text-blue-700 mb-6">Database optimization is crucial for maintaining high performance in web applications. Here are the essential strategies I've learned for optimizing MySQL databases.</p>
                        
                        <h3 class="text-xl font-bold text-blue-900 mb-4">Indexing Strategies</h3>
                        <p class="text-blue-700 mb-4">Proper indexing can dramatically improve query performance:</p>
                        <ul class="list-disc pl-6 mb-6 text-blue-700">
                            <li><strong>Primary Keys:</strong> Always use auto-incrementing primary keys</li>
                            <li><strong>Foreign Keys:</strong> Index all foreign key columns</li>
                            <li><strong>Frequently Queried Columns:</strong> Add indexes to columns used in WHERE clauses</li>
                            <li><strong>Composite Indexes:</strong> Create multi-column indexes for complex queries</li>
                        </ul>
                        
                        <h3 class="text-xl font-bold text-blue-900 mb-4">Query Optimization</h3>
                        <p class="text-blue-700 mb-4">Writing efficient queries is essential for database performance:</p>
                        <div class="bg-gray-100 p-4 rounded-lg mb-6">
                            <code class="text-sm">-- Good: Use specific columns<br>
SELECT id, name, email FROM users WHERE status = 'active';<br><br>
-- Avoid: SELECT * FROM users;</code>
                        </div>
                        
                        <h3 class="text-xl font-bold text-blue-900 mb-4">Performance Monitoring</h3>
                        <p class="text-blue-700 mb-4">Regular monitoring helps identify performance bottlenecks:</p>
                        <ul class="list-disc pl-6 mb-6 text-blue-700">
                            <li>Use EXPLAIN to analyze query execution plans</li>
                            <li>Monitor slow query logs</li>
                            <li>Check database connection usage</li>
                            <li>Regular backup and maintenance</li>
                        </ul>
                        
                        <div class="bg-green-50 p-6 rounded-lg mt-8">
                            <h4 class="font-bold text-green-900 mb-2">✅ Best Practice</h4>
                            <p class="text-green-700">Always test your optimization changes in a development environment before applying them to production.</p>
                        </div>
                    </div>
                `
            },
            'tailwind-css': {
                title: 'Building Responsive Web Apps',
                category: 'Frontend',
                date: 'Oct 2024',
                readTime: '6 min read',
                content: `
                    <div class="prose max-w-none">
                        <div class="flex items-center gap-4 mb-6 text-sm text-blue-600">
                            <span><i class="fas fa-tag mr-1"></i>Frontend</span>
                            <span><i class="fas fa-clock mr-1"></i>6 min read</span>
                            <span><i class="fas fa-calendar mr-1"></i>Oct 2024</span>
                        </div>
                        
                        <p class="text-lg text-blue-700 mb-6">Tailwind CSS has revolutionized how I approach frontend development. Its utility-first approach makes building responsive, beautiful interfaces faster and more maintainable.</p>
                        
                        <h3 class="text-xl font-bold text-blue-900 mb-4">Why Tailwind CSS?</h3>
                        <ul class="list-disc pl-6 mb-6 text-blue-700">
                            <li><strong>Rapid Development:</strong> Build interfaces faster with utility classes</li>
                            <li><strong>Consistent Design:</strong> Built-in design system ensures consistency</li>
                            <li><strong>Responsive by Default:</strong> Mobile-first responsive design</li>
                            <li><strong>Customizable:</strong> Easy to customize and extend</li>
                        </ul>
                        
                        <h3 class="text-xl font-bold text-blue-900 mb-4">Key Concepts</h3>
                        <p class="text-blue-700 mb-4">Understanding these concepts will help you master Tailwind:</p>
                        <div class="bg-gray-100 p-4 rounded-lg mb-6">
                            <code class="text-sm">// Responsive design<br>
&lt;div class="w-full md:w-1/2 lg:w-1/3"&gt;<br>
  &lt;h1 class="text-2xl md:text-3xl lg:text-4xl"&gt;Title&lt;/h1&gt;<br>
&lt;/div&gt;</code>
                        </div>
                        
                        <h3 class="text-xl font-bold text-blue-900 mb-4">Best Practices</h3>
                        <ul class="list-disc pl-6 mb-6 text-blue-700">
                            <li>Use component-based architecture</li>
                            <li>Leverage Tailwind's responsive prefixes</li>
                            <li>Create reusable component classes</li>
                            <li>Use the @apply directive for complex styles</li>
                        </ul>
                        
                        <div class="bg-purple-50 p-6 rounded-lg mt-8">
                            <h4 class="font-bold text-purple-900 mb-2">🎨 Design Tip</h4>
                            <p class="text-purple-700">Start with mobile design and progressively enhance for larger screens. This mobile-first approach ensures better user experience across all devices.</p>
                        </div>
                    </div>
                `
            },
            'javascript-es6': {
                title: 'Modern JavaScript ES6+ Features',
                category: 'Frontend',
                date: 'Sep 2024',
                readTime: '8 min read',
                content: `
                    <div class="prose max-w-none">
                        <div class="flex items-center gap-4 mb-6 text-sm text-blue-600">
                            <span><i class="fas fa-tag mr-1"></i>Frontend</span>
                            <span><i class="fas fa-clock mr-1"></i>8 min read</span>
                            <span><i class="fas fa-calendar mr-1"></i>Sep 2024</span>
                        </div>
                        
                        <p class="text-lg text-blue-700 mb-6">Modern JavaScript has evolved significantly with ES6+ features that make development more efficient and code more readable. Let me share the most important features you should know.</p>
                        
                        <h3 class="text-xl font-bold text-blue-900 mb-4">Arrow Functions</h3>
                        <p class="text-blue-700 mb-4">Arrow functions provide a more concise syntax and lexical this binding:</p>
                        <div class="bg-gray-100 p-4 rounded-lg mb-6">
                            <code class="text-sm">// Traditional function<br>
function add(a, b) {<br>
  return a + b;<br>
}<br><br>
// Arrow function<br>
const add = (a, b) => a + b;</code>
                        </div>
                        
                        <h3 class="text-xl font-bold text-blue-900 mb-4">Destructuring</h3>
                        <p class="text-blue-700 mb-4">Extract values from objects and arrays easily:</p>
                        <div class="bg-gray-100 p-4 rounded-lg mb-6">
                            <code class="text-sm">// Object destructuring<br>
const { name, age } = user;<br><br>
// Array destructuring<br>
const [first, second] = array;</code>
                        </div>
                        
                        <h3 class="text-xl font-bold text-blue-900 mb-4">Async/Await</h3>
                        <p class="text-blue-700 mb-4">Handle asynchronous operations more elegantly:</p>
                        <div class="bg-gray-100 p-4 rounded-lg mb-6">
                            <code class="text-sm">async function fetchData() {<br>
  try {<br>
    const response = await fetch('/api/data');<br>
    const data = await response.json();<br>
    return data;<br>
  } catch (error) {<br>
    console.error('Error:', error);<br>
  }<br>
}</code>
                        </div>
                        
                        <div class="bg-yellow-50 p-6 rounded-lg mt-8">
                            <h4 class="font-bold text-yellow-900 mb-2">⚡ Performance Tip</h4>
                            <p class="text-yellow-700">Use const and let instead of var to avoid hoisting issues and create block-scoped variables for better performance.</p>
                        </div>
                    </div>
                `
            },
            'git-workflow': {
                title: 'Git Workflow Best Practices',
                category: 'Git & GitHub',
                date: 'Aug 2024',
                readTime: '4 min read',
                content: `
                    <div class="prose max-w-none">
                        <div class="flex items-center gap-4 mb-6 text-sm text-blue-600">
                            <span><i class="fas fa-tag mr-1"></i>Git & GitHub</span>
                            <span><i class="fas fa-clock mr-1"></i>4 min read</span>
                            <span><i class="fas fa-calendar mr-1"></i>Aug 2024</span>
                        </div>
                        
                        <p class="text-lg text-blue-700 mb-6">Mastering Git workflows is essential for any developer. Here are the best practices I've learned for efficient collaboration and code management.</p>
                        
                        <h3 class="text-xl font-bold text-blue-900 mb-4">Branching Strategy</h3>
                        <p class="text-blue-700 mb-4">A good branching strategy keeps your codebase organized:</p>
                        <ul class="list-disc pl-6 mb-6 text-blue-700">
                            <li><strong>main/master:</strong> Production-ready code</li>
                            <li><strong>develop:</strong> Integration branch for features</li>
                            <li><strong>feature/:</strong> New features and enhancements</li>
                            <li><strong>hotfix/:</strong> Critical production fixes</li>
                        </ul>
                        
                        <h3 class="text-xl font-bold text-blue-900 mb-4">Commit Conventions</h3>
                        <p class="text-blue-700 mb-4">Consistent commit messages improve project maintainability:</p>
                        <div class="bg-gray-100 p-4 rounded-lg mb-6">
                            <code class="text-sm">feat: add user authentication system<br>
fix: resolve login validation bug<br>
docs: update API documentation<br>
style: format code according to standards</code>
                        </div>
                        
                        <h3 class="text-xl font-bold text-blue-900 mb-4">Collaboration Tips</h3>
                        <ul class="list-disc pl-6 mb-6 text-blue-700">
                            <li>Always pull before pushing changes</li>
                            <li>Use pull requests for code review</li>
                            <li>Keep commits small and focused</li>
                            <li>Write descriptive commit messages</li>
                        </ul>
                        
                        <div class="bg-orange-50 p-6 rounded-lg mt-8">
                            <h4 class="font-bold text-orange-900 mb-2">🔧 Workflow Tip</h4>
                            <p class="text-orange-700">Use Git hooks to automate tasks like running tests and linting before commits, ensuring code quality.</p>
                        </div>
                    </div>
                `
            },
            'career-journey': {
                title: 'My Journey into Web Development',
                category: 'Career',
                date: 'Jul 2024',
                readTime: '5 min read',
                content: `
                    <div class="prose max-w-none">
                        <div class="flex items-center gap-4 mb-6 text-sm text-blue-600">
                            <span><i class="fas fa-tag mr-1"></i>Career</span>
                            <span><i class="fas fa-clock mr-1"></i>5 min read</span>
                            <span><i class="fas fa-calendar mr-1"></i>Jul 2024</span>
                        </div>
                        
                        <p class="text-lg text-blue-700 mb-6">Starting a career in web development can be both exciting and overwhelming. Let me share my personal journey and the lessons I've learned along the way.</p>
                        
                        <h3 class="text-xl font-bold text-blue-900 mb-4">The Beginning</h3>
                        <p class="text-blue-700 mb-4">My journey started with curiosity about how websites work. I began with basic HTML and CSS, building simple static pages and gradually moving to more complex projects.</p>
                        
                        <h3 class="text-xl font-bold text-blue-900 mb-4">Key Learning Milestones</h3>
                        <ul class="list-disc pl-6 mb-6 text-blue-700">
                            <li><strong>HTML & CSS:</strong> Foundation of web development</li>
                            <li><strong>JavaScript:</strong> Adding interactivity to websites</li>
                            <li><strong>PHP & Laravel:</strong> Backend development and frameworks</li>
                            <li><strong>Database Design:</strong> MySQL and data management</li>
                            <li><strong>Version Control:</strong> Git and GitHub for collaboration</li>
                        </ul>
                        
                        <h3 class="text-xl font-bold text-blue-900 mb-4">Challenges Faced</h3>
                        <p class="text-blue-700 mb-4">Every developer faces challenges. Here are some I encountered:</p>
                        <ul class="list-disc pl-6 mb-6 text-blue-700">
                            <li>Understanding complex concepts like MVC architecture</li>
                            <li>Debugging and problem-solving</li>
                            <li>Keeping up with rapidly changing technologies</li>
                            <li>Building confidence in my abilities</li>
                        </ul>
                        
                        <h3 class="text-xl font-bold text-blue-900 mb-4">Tips for Aspiring Developers</h3>
                        <ul class="list-disc pl-6 mb-6 text-blue-700">
                            <li>Start with fundamentals and build strong foundations</li>
                            <li>Practice regularly with real projects</li>
                            <li>Join developer communities and seek mentorship</li>
                            <li>Don't be afraid to make mistakes - they're learning opportunities</li>
                            <li>Stay curious and keep learning new technologies</li>
                        </ul>
                        
                        <div class="bg-blue-50 p-6 rounded-lg mt-8">
                            <h4 class="font-bold text-blue-900 mb-2">💪 Motivation</h4>
                            <p class="text-blue-700">Remember, every expert was once a beginner. The key is to stay consistent, be patient with yourself, and never stop learning.</p>
                        </div>
                    </div>
                `
            }
        };

        // Modal functionality for blog posts (legacy helpers aligned to #articleDetailModal)
        function openArticleModal(button) {
            const postId = button?.getAttribute('data-post-id');
            if (!postId) return;

            const dataEl = document.getElementById('blog-posts-data');
            if (!dataEl) return;
            const blogPosts = JSON.parse(dataEl.textContent || '{}');
            const post = blogPosts[postId];
            if (!post) return;

            const titleEl = document.getElementById('modalTitle');
            const readEl = document.getElementById('modalReadTime');
            const dateEl = document.getElementById('modalDate');
            const contentEl = document.getElementById('modalContent');
            const modalEl = document.getElementById('articleDetailModal');

            if (titleEl) titleEl.textContent = post.judul;
            if (readEl) readEl.textContent = Math.ceil(post.konten.split(' ').length / 200) + ' min read';
            if (dateEl) dateEl.textContent = new Date(post.created_at).toLocaleDateString('en-US', { year: 'numeric', month: 'short' });

            if (contentEl) {
                let formattedContent = post.konten
                    .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>')
                    .replace(/\n\n/g, '</p><p>')
                    .replace(/\n/g, '<br>');
                contentEl.innerHTML = '<p>' + formattedContent + '</p>';
            }

            if (modalEl) {
                modalEl.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        }

        // Close modal function
        function closeArticleModal() {
            const modalEl = document.getElementById('articleDetailModal');
            if (modalEl) modalEl.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        (function(){
            const modalEl = document.getElementById('articleDetailModal');
            if (!modalEl) return;
            modalEl.addEventListener('click', function(e) {
                if (e.target === this) closeArticleModal();
            });
        })();

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeArticleModal();
        });

        // Blog filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.category-filter');
            const articles = document.querySelectorAll('.blog-article');
            // Delegate click for Read More links
            document.body.addEventListener('click', function(e){
                const link = e.target.closest('a.js-readmore');
                if (!link) return;
                e.preventDefault();
                showArticleDetail(link);
            });

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const category = this.getAttribute('data-category');
                    
                    // Update active button
                    filterButtons.forEach(btn => {
                        btn.classList.remove('active', 'bg-blue-600', 'text-white');
                        btn.classList.add('bg-white', 'text-blue-600', 'border', 'border-blue-200');
                    });
                    
                    this.classList.add('active', 'bg-blue-600', 'text-white');
                    this.classList.remove('bg-white', 'text-blue-600', 'border', 'border-blue-200');
                    
                    // Filter articles
                    articles.forEach(article => {
                        const articleCategory = article.getAttribute('data-category');
                        
                        if (category === 'all' || articleCategory === category) {
                            article.style.display = 'block';
                            article.style.animation = 'fadeIn 0.5s ease-in-out';
                        } else {
                            article.style.display = 'none';
                        }
                    });
                });
            });
        });

        // Modal functionality for blog posts
        function openArticleModal(button) {
            console.log('openArticleModal called!', button);
            const postId = button.getAttribute('data-post-id');
            console.log('Post ID:', postId);
            
            // Get blog posts data from JSON script tag
            const blogPostsData = document.getElementById('blog-posts-data').textContent;
            console.log('Blog posts data length:', blogPostsData.length);
            const blogPosts = JSON.parse(blogPostsData);
            const post = blogPosts[postId];
            console.log('Found post:', post);
            
            if (!post) {
                console.error('Post not found:', postId);
                return;
            }

            // Update modal content
            document.getElementById('modalTitle').textContent = post.judul;
            document.getElementById('modalReadTime').textContent = Math.ceil(post.konten.split(' ').length / 200) + ' min read';
            document.getElementById('modalDate').textContent = new Date(post.created_at).toLocaleDateString('en-US', { 
                year: 'numeric', 
                month: 'short' 
            });
            document.getElementById('modalContent').innerHTML = post.konten.replace(/\n/g, '<br>');
            document.getElementById('modalFullArticleLink').href = `/blog/${postId}`;
            
            // Show modal
            document.getElementById('articleDetailModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        }

        function closeArticleModal() {
            document.getElementById('articleDetailModal').classList.add('hidden');
            document.body.style.overflow = 'auto'; // Restore scrolling
        }

        // Close modal when clicking outside
        document.getElementById('articleDetailModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeArticleModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !document.getElementById('articleDetailModal').classList.contains('hidden')) {
                closeArticleModal();
            }
        });

        // Show article detail in modal
        function showArticleDetail(button) {
            const postId = button.getAttribute('data-post-id');

            // Get blog posts data from JSON script tag
            const blogPostsData = document.getElementById('blog-posts-data').textContent;
            const blogPosts = JSON.parse(blogPostsData);
            const post = blogPosts[postId];

            if (!post) {
                console.error('Post not found:', postId);
                return false; // prevent navigation
            }

            // Update modal content
            document.getElementById('modalTitle').textContent = post.judul;
            document.getElementById('modalCategory').textContent = 'Laravel'; // You can make this dynamic based on post category
            document.getElementById('modalReadTime').textContent = Math.ceil(post.konten.split(' ').length / 200) + ' min read';
            document.getElementById('modalDate').textContent = new Date(post.created_at).toLocaleDateString('en-US', {
                year: 'numeric',
                month: 'short'
            });

            // Format content with line breaks and styling
            let formattedContent = post.konten
                .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>') // Bold text
                .replace(/\n\n/g, '</p><p>') // Paragraph breaks
                .replace(/\n/g, '<br>'); // Line breaks

            document.getElementById('modalContent').innerHTML = '<p>' + formattedContent + '</p>';

            // Update full article link
            document.getElementById('modalFullArticleLink').href = `/blog/${postId}`;

            // Show modal
            document.getElementById('articleDetailModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
            return false; // prevent navigation
        }

        // Close article detail modal
        function closeArticleDetailModal() {
            document.getElementById('articleDetailModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        document.getElementById('articleDetailModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeArticleDetailModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !document.getElementById('articleDetailModal').classList.contains('hidden')) {
                closeArticleDetailModal();
            }
        });
    </script>

    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Modal animations */
        #articleModal {
            transition: opacity 0.3s ease-in-out;
        }
        
        #articleModal:not(.hidden) .bg-white {
            animation: modalSlideIn 0.3s ease-out;
        }
        
        @keyframes modalSlideIn {
            from {
                opacity: 0;
                transform: scale(0.9) translateY(-20px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }
        
        /* Prose styling for expanded article content */
        .prose {
            color: #1e3a8a;
            line-height: 1.7;
        }

        .prose h1, .prose h2, .prose h3, .prose h4, .prose h5, .prose h6 {
            color: #1e40af;
            font-weight: 700;
            margin-top: 1.5rem;
            margin-bottom: 0.75rem;
        }

        .prose p {
            margin-bottom: 1.25rem;
        }

        .prose strong {
            color: #1e40af;
            font-weight: 600;
        }

        .prose code {
            background-color: #f1f5f9;
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            font-family: 'Courier New', monospace;
            font-size: 0.875rem;
            color: #dc2626;
        }

        /* Modal animations */
        #articleDetailModal {
            transition: opacity 0.3s ease-in-out;
        }

        #articleDetailModal:not(.hidden) .bg-white {
            animation: modalSlideIn 0.3s ease-out;
        }

        @keyframes modalSlideIn {
            from {
                opacity: 0;
                transform: scale(0.9) translateY(-20px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }
    </style>
@endsection

@section('title', 'Home - Rafly Juliano')
@section('meta_description', 'Selamat datang di portfolio Rafly Juliano, web developer.')
@section('og_title', 'Home - Rafly Juliano')
@section('og_description', 'Selamat datang di portfolio Rafly Juliano, web developer.')

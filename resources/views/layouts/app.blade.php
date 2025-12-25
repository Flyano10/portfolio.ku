<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ dark: localStorage.getItem('theme') === 'dark' }" :class="{ 'dark': dark }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Rafly Juliano - Web Developer'))</title>
    <meta name="description" content="@yield('meta_description', 'Portfolio Rafly Juliano, Web Developer, Project, Blog, Contact')">
    <meta name="keywords" content="@yield('meta_keywords', 'Rafly Juliano, Web Developer, Portfolio, Laravel, Tailwind, Project, Blog')">
    <meta name="author" content="@yield('meta_author', 'Rafly Juliano')">
    <meta name="robots" content="index, follow">
    <meta name="language" content="en">
    <meta name="revisit-after" content="7 days">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'Rafly Juliano - Web Developer')">
    <meta property="og:description" content="@yield('og_description', 'Portfolio Rafly Juliano, Web Developer, Project, Blog, Contact')">
    <meta property="og:image" content="@yield('og_image', asset('images/rafly.jpg.jpeg'))">
    <meta property="og:site_name" content="Rafly Juliano Portfolio">
    <meta property="og:locale" content="en_US">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('og_title', 'Rafly Juliano - Web Developer')">
    <meta property="twitter:description" content="@yield('og_description', 'Portfolio Rafly Juliano, Web Developer, Project, Blog, Contact')">
    <meta property="twitter:image" content="@yield('og_image', asset('images/rafly.jpg.jpeg'))">
    
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Schema.org structured data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Rafly Juliano",
        "jobTitle": "Full-Stack Web Developer",
        "description": "Passionate full-stack web developer specializing in Laravel, PHP, MySQL, and modern web technologies",
        "url": "{{ url('/') }}",
        "image": "{{ asset('images/rafly.jpg.jpeg') }}",
        "email": "raflyjuliano62@gmail.com",
        "sameAs": [
            "https://github.com/raflyjuliano",
            "https://linkedin.com/in/raflyjuliano",
            "https://www.instagram.com/liianno_"
        ],
        "knowsAbout": [
            "Laravel",
            "PHP",
            "MySQL",
            "Tailwind CSS",
            "JavaScript",
            "HTML5",
            "CSS3",
            "Git",
            "GitHub",
            "VS Code"
        ],
        "hasOccupation": {
            "@type": "Occupation",
            "name": "Web Developer",
            "description": "Full-stack web development with focus on backend systems and database management"
        }
    }
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous">
    
    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Preload critical resources -->
    <link rel="preload" href="{{ asset('images/rafly.jpg.jpeg') }}" as="image">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
</head>

<body class="bg-gray-50 text-gray-900 font-sans antialiased">
    <div id="app">
        @php
            $isAdminArea = request()->is('admin/*') || request()->routeIs('dashboard') || request()->routeIs('projects.*') || request()->routeIs('kontak.*') || request()->routeIs('admin.blog.*');
            $hideNavbar = request()->routeIs('blog.show');
        @endphp
        @if($hideNavbar)
        
        @elseif($isAdminArea)
        <!-- Admin Navbar -->
        @php
            $adminLinks = [
                ['label' => 'Dashboard', 'icon' => 'fa-tachometer-alt', 'route' => 'dashboard', 'href' => route('dashboard')],
                ['label' => 'Projects', 'icon' => 'fa-briefcase', 'route' => 'projects.index', 'href' => route('projects.index')],
                ['label' => 'Posts', 'icon' => 'fa-newspaper', 'route' => 'admin.blog.index', 'href' => route('admin.blog.index')],
                ['label' => 'Contacts', 'icon' => 'fa-inbox', 'route' => 'kontak.index', 'href' => route('kontak.index')],
            ];
        @endphp
        <nav x-data="{ open: false }" class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur border-b border-blue-100 shadow-md">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex items-center gap-3">
                        <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-xl flex items-center justify-center shadow-md">
                                <span class="text-white font-semibold">R</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-sm text-blue-400 font-semibold uppercase tracking-[0.2em]">Portfolio Panel</span>
                                <span class="text-lg font-bold text-blue-900 leading-tight">Admin Console</span>
                            </div>
                        </a>
                    </div>

                    <div class="hidden lg:flex items-center gap-2">
                        @foreach($adminLinks as $link)
                            @php
                                $isActive = request()->routeIs($link['route']) || str_starts_with(request()->route()?->getName() ?? '', str_replace('.index', '', $link['route']));
                            @endphp
                            <a href="{{ $link['href'] }}" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl text-sm font-semibold transition-all {{ $isActive ? 'bg-blue-600 text-white shadow-lg shadow-blue-200' : 'text-blue-700 hover:bg-blue-50 hover:text-blue-800' }}">
                                <i class="fas {{ $link['icon'] }}"></i>{{ $link['label'] }}
                            </a>
                        @endforeach
                    </div>

                    <div class="flex items-center gap-3">
                        <a href="/" class="hidden md:inline-flex items-center gap-2 px-3 py-2 text-sm text-blue-600 hover:text-blue-800 border border-blue-100 rounded-lg hover:bg-blue-50">
                            <i class="fas fa-external-link-alt"></i>View Site
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-xl text-sm font-semibold shadow">
                                <i class="fas fa-sign-out-alt"></i>Logout
                            </button>
                        </form>
                        <button @click="open = !open" class="lg:hidden inline-flex items-center justify-center w-10 h-10 rounded-xl border border-blue-100 text-blue-600 hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-300">
                            <svg x-show="!open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <svg x-show="open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div x-show="open" x-transition class="lg:hidden pb-4" @click.away="open = false">
                    <div class="space-y-2 bg-white border border-blue-100 rounded-xl shadow-md p-4 mt-3">
                        @foreach($adminLinks as $link)
                            @php
                                $isActive = request()->routeIs($link['route']) || str_starts_with(request()->route()?->getName() ?? '', str_replace('.index', '', $link['route']));
                            @endphp
                            <a href="{{ $link['href'] }}" class="flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-semibold transition {{ $isActive ? 'bg-blue-600 text-white' : 'text-blue-700 hover:bg-blue-50' }}">
                                <i class="fas {{ $link['icon'] }}"></i>{{ $link['label'] }}
                            </a>
                        @endforeach
                        <a href="/" class="flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-semibold text-blue-600 hover:bg-blue-50">
                            <i class="fas fa-external-link-alt"></i>View Site
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        
        @else
        <!-- Modern Navbar (Frontend) -->
        <nav x-data="{ open: false, scrolled: false }" 
             @scroll.window="scrolled = window.scrollY > 10"
             :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-lg' : 'bg-white'"
             class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 border-b border-blue-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <!-- Logo -->
                    <div class="flex-shrink-0">
                        <a href="/" class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center">
                                <span class="text-white font-bold text-sm">R</span>
                            </div>
                            <span class="text-xl font-bold text-gray-800">Rafly</span>
                        </a>
                    </div>

                    <!-- Desktop Navigation -->
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-8">
                            <a href="/" class="js-nav-home text-gray-600 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 hover:bg-blue-50">
                                <i class="fas fa-home mr-1"></i>Home
                            </a>
                            <a href="{{ route('about') }}" class="js-nav-about text-gray-600 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 hover:bg-blue-50">
                                <i class="fas fa-user mr-1"></i>About
                            </a>
                            <a href="{{ route('skills') }}" class="js-nav-skills text-gray-600 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 hover:bg-blue-50">
                                <i class="fas fa-code mr-1"></i>Skills
                            </a>
                            <a href="{{ route('blog.index') }}" class="js-nav-blog text-gray-600 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 hover:bg-blue-50">
                                <i class="fas fa-newspaper mr-1"></i>Blog
                            </a>
                            <a href="#contact" class="js-nav-contact text-gray-600 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 hover:bg-blue-50">
                                <i class="fas fa-envelope mr-1"></i>Contact
                            </a>
                            
                            <!-- Language Switcher -->
                            <div class="relative" x-data="{ open: false }">
                                <button @click="open = !open" class="flex items-center space-x-2 px-3 py-2 rounded-lg bg-blue-50 hover:bg-blue-100 transition-colors duration-300">
                                    <i class="fas fa-globe text-blue-600"></i>
                                    <span id="currentLang" class="text-sm font-medium text-blue-600">EN</span>
                                    <i class="fas fa-chevron-down text-blue-600 text-xs"></i>
                                </button>
                                
                                <div x-show="open" @click.away="open = false" x-transition class="absolute right-0 mt-2 w-32 bg-white rounded-lg shadow-lg border border-gray-200 z-50">
                                    <button onclick="switchLanguage('en')" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 flex items-center space-x-2">
                                        <i class="fas fa-flag-usa text-blue-600"></i>
                                        <span>English</span>
                                    </button>
                                    <button onclick="switchLanguage('id')" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 flex items-center space-x-2">
                                        <i class="fas fa-flag text-red-600"></i>
                                        <span>Indonesia</span>
                                    </button>
                                </div>
                            </div>
                            @auth
                                <a href="{{ route('dashboard') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors duration-200">
                                    <i class="fas fa-tachometer-alt mr-1"></i>Dashboard
                                </a>
                                <form method="POST" action="{{ route('logout') }}" class="inline">
                                    @csrf
                                    <button type="submit" class="text-red-600 hover:text-red-700 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 hover:bg-red-50">
                                        <i class="fas fa-sign-out-alt mr-1"></i>Logout
                                    </button>
                                </form>
                            @endauth
                        </div>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="md:hidden">
                        <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-blue-600 hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg x-show="!open" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <svg x-show="open" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu -->
            <div x-show="open" @click.away="open = false" class="md:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t border-blue-100">
                    <a href="/" class="js-nav-home text-gray-600 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium hover:bg-blue-50 transition-colors duration-200">
                        <i class="fas fa-home mr-2"></i>Home
                    </a>
                    <a href="{{ route('about') }}" class="js-nav-about text-gray-600 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium hover:bg-blue-50 transition-colors duration-200">
                        <i class="fas fa-user mr-2"></i>About
                    </a>
                    <a href="{{ route('skills') }}" class="js-nav-skills text-gray-600 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium hover:bg-blue-50 transition-colors duration-200">
                        <i class="fas fa-code mr-2"></i>Skills
                    </a>
                    <a href="{{ route('blog.index') }}" class="js-nav-blog text-gray-600 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium hover:bg-blue-50 transition-colors duration-200">
                        <i class="fas fa-newspaper mr-2"></i>Blog
                    </a>
                    <a href="#contact" class="js-nav-contact text-gray-600 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium hover:bg-blue-50 transition-colors duration-200">
                        <i class="fas fa-envelope mr-2"></i>Contact
                    </a>
                    @auth
                        <a href="{{ route('dashboard') }}" class="bg-blue-600 text-white block px-3 py-2 rounded-md text-base font-medium hover:bg-blue-700 transition-colors duration-200">
                            <i class="fas fa-tachometer-alt mr-2"></i>Dashboard
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="block">
                            @csrf
                            <button type="submit" class="text-red-600 hover:text-red-700 w-full text-left px-3 py-2 rounded-md text-base font-medium hover:bg-red-50 transition-colors duration-200">
                                <i class="fas fa-sign-out-alt mr-2"></i>Logout
                            </button>
                        </form>
                    @endauth
                </div>
            </div>
        </nav>
        @endif

        {{-- Optional Header --}}
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        {{-- Main Content --}}
        <main class="pt-20 pb-10">
            @yield('content')
        </main>
    </div>

    <!-- Page Loader -->
    <div id="pageLoader" class="page-loader">
        <div class="loader-content">
            <div class="loader-spinner"></div>
            <h3 class="text-xl font-bold mb-2">Rafly Juliano</h3>
            <p class="text-blue-100">Loading Portfolio...</p>
        </div>
    </div>

    <!-- AOS (Animate On Scroll) JavaScript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Page Loader
        window.addEventListener('load', function() {
            const loader = document.getElementById('pageLoader');
            setTimeout(() => {
                if (loader) {
                    loader.classList.add('hidden');
                    setTimeout(() => {
                        loader.style.display = 'none';
                    }, 500);
                }
            }, 1000);
        });

        // Fallback: Hide loader after 3 seconds regardless
        setTimeout(() => {
            const loader = document.getElementById('pageLoader');
            if (loader) {
                loader.classList.add('hidden');
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 500);
            }
        }, 3000);

        // AOS Initialization
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });

        // Loading Button States
        function showLoading(button) {
            const btn = document.querySelector(button);
            if (btn) {
                btn.classList.add('btn-loading');
                btn.disabled = true;
            }
        }

        function hideLoading(button) {
            const btn = document.querySelector(button);
            if (btn) {
                btn.classList.remove('btn-loading');
                btn.disabled = false;
            }
        }

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href === '#' || this.classList.contains('js-readmore')) {
                    return; // biarkan handler lain yang urus
                }
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        // Language Switcher
        const currentLang = localStorage.getItem('language') || 'en';
        document.getElementById('currentLang').textContent = currentLang.toUpperCase();

        function switchLanguage(lang) {
            try {
                localStorage.setItem('language', lang);
                document.getElementById('currentLang').textContent = lang.toUpperCase();
                
                // Update page content based on language
                updatePageContent(lang);
            } catch (error) {
                console.error('Error switching language:', error);
            }
        }

        function updatePageContent(lang) {
            try {
                const translations = {
                en: {
                    home: 'Home',
                    about: 'About',
                    skills: 'Skills',
                    contact: 'Contact',
                    welcome: 'Welcome to My Portfolio',
                    heroTitle: 'Hi, I\'m <span class="text-blue-600">Rafly</span>',
                    heroSubtitle: 'Full-Stack Web Developer',
                    heroDescription: 'Passionate developer creating modern, scalable web applications with Laravel, PHP, and cutting-edge technologies. Ready to bring your ideas to life!',
                    viewProjects: 'View Projects',
                    downloadCv: 'Download CV',
                    whyChooseMeTitle: 'Why Choose Me?',
                    whyChooseMeDesc: 'I bring a unique combination of technical expertise, creative problem-solving, and dedication to every project.',
                    cleanCodeTitle: 'Clean Code',
                    cleanCodeDesc: 'Writing maintainable, scalable, and well-documented code that follows industry best practices.',
                    fastDeliveryTitle: 'Fast Delivery',
                    fastDeliveryDesc: 'Efficient development process with quick turnaround times without compromising quality.',
                    passionateTitle: 'Passionate',
                    passionateDesc: 'Genuine passion for web development and continuous learning of new technologies.',
                    servicesTitle: 'Services I Offer',
                    servicesDesc: 'Comprehensive web development solutions tailored to your business needs',
                    webDevTitle: 'Web Development',
                    webDevDesc: 'Custom websites and web applications built with modern technologies',
                    responsiveTitle: 'Responsive Design',
                    responsiveDesc: 'Mobile-first approach ensuring perfect experience across all devices',
                    backendTitle: 'Backend Development',
                    backendDesc: 'Robust server-side solutions with Laravel and PHP',
                    seoTitle: 'SEO Optimization',
                    seoDesc: 'Search engine optimization for better visibility and ranking',
                    maintenanceTitle: 'Maintenance',
                    maintenanceDesc: 'Ongoing support and maintenance for your web applications',
                    consultationTitle: 'Consultation',
                    consultationDesc: 'Technical advice and guidance for your digital projects',
                    blogTitle: 'Blog & Articles',
                    blogDesc: 'Sharing my journey in web development, technical insights, and learning experiences.',
                    filterAll: 'All',
                    filterLaravel: 'Laravel',
                    filterMysql: 'MySQL',
                    filterFrontend: 'Frontend',
                    filterCareer: 'Career',
                    webDevTitle: 'Web Development',
                    webDevDesc: 'Custom websites and web applications built with modern technologies',
                    responsiveTitle: 'Responsive Design',
                    responsiveDesc: 'Mobile-first approach ensuring perfect experience across all devices',
                    backendTitle: 'Backend Development',
                    backendDesc: 'Robust server-side solutions with Laravel and PHP',
                    seoTitle: 'SEO Optimization',
                    seoDesc: 'Search engine optimization for better visibility and ranking',
                    maintenanceTitle: 'Maintenance',
                    maintenanceDesc: 'Ongoing support and maintenance for your web applications',
                    consultationTitle: 'Consultation',
                    consultationDesc: 'Technical advice and guidance for your digital projects',
                    featuredProjectsTitle: 'Featured Projects',
                    featuredProjectsDesc: 'Here are some of my recent projects that showcase my skills and creativity in web development.',
                    contactTitle: 'Let\'s Work Together',
                    contactDesc: 'Ready to start your next project? Let\'s discuss how I can help bring your ideas to life!',
                    sendMessage: 'Send a Message',
                    projectsTitle: 'Featured Projects',
                    projectsDesc: 'Showcasing my best work and technical expertise through real-world projects',
                    project1Title: 'E-Commerce Platform',
                    project1Desc: 'Full-stack e-commerce solution built with Laravel, featuring user authentication, payment integration, and admin dashboard.',
                    project2Title: 'Task Management App',
                    project2Desc: 'Responsive web application for project management with real-time updates, team collaboration, and progress tracking.',
                    project3Title: 'Analytics Dashboard',
                    project3Desc: 'Data visualization dashboard with interactive charts, real-time metrics, and comprehensive reporting features.',
                    viewProject: 'View Project',
                    viewAllProjects: 'View All Projects',
                    article1Title: 'Getting Started with Laravel 11',
                    article1Desc: 'A comprehensive guide to Laravel 11\'s new features, improved performance, and how to get started with this powerful PHP framework.',
                    article2Title: 'MySQL Database Optimization',
                    article2Desc: 'Essential tips for optimizing MySQL databases, including indexing strategies, query optimization, and performance tuning techniques.',
                    article3Title: 'Building Responsive Web Apps',
                    article3Desc: 'Learn how to create beautiful, responsive web applications using Tailwind CSS utility-first approach and modern design principles.',
                    article4Title: 'Modern JavaScript ES6+ Features',
                    article4Desc: 'Explore the latest JavaScript features including arrow functions, destructuring, async/await, and modules for modern web development.',
                    article5Title: 'Git Workflow Best Practices',
                    article5Desc: 'Master Git workflows with branching strategies, commit conventions, and collaboration techniques for efficient development teams.',
                    article6Title: 'My Journey into Web Development',
                    article6Desc: 'Sharing my personal story of learning web development, challenges faced, and tips for aspiring developers starting their journey.',
                    viewProject1: 'View Project',
                    viewProject2: 'View Project',
                    viewProject3: 'View Project',
                    viewAllProjects: 'View All Projects',
                    readMore1: 'Read More',
                    readMore2: 'Read More',
                    readMore3: 'Read More',
                    readMore4: 'Read More',
                    readMore5: 'Read More',
                    readMore6: 'Read More',
                    viewAllArticles: 'View All Articles',
                    filterAll: 'All',
                    filterLaravel: 'Laravel',
                    filterMysql: 'MySQL',
                    filterFrontend: 'Frontend',
                    filterCareer: 'Career'
                },
                id: {
                    home: 'Beranda',
                    about: 'Tentang',
                    skills: 'Keahlian',
                    contact: 'Kontak',
                    welcome: 'Selamat Datang di Portfolio Saya',
                    heroTitle: 'Halo, Saya <span class="text-blue-600">Rafly</span>',
                    heroSubtitle: 'Full-Stack Web Developer',
                    heroDescription: 'Developer yang bersemangat dalam menciptakan aplikasi web modern dan scalable dengan Laravel, PHP, dan teknologi terdepan. Siap mewujudkan ide-ide Anda!',
                    viewProjects: 'Lihat Project',
                    downloadCv: 'Download CV',
                    whyChooseMeTitle: 'Mengapa Memilih Saya?',
                    whyChooseMeDesc: 'Saya membawa kombinasi unik dari keahlian teknis, pemecahan masalah kreatif, dan dedikasi untuk setiap proyek.',
                    cleanCodeTitle: 'Kode Bersih',
                    cleanCodeDesc: 'Menulis kode yang dapat dipelihara, scalable, dan terdokumentasi dengan baik yang mengikuti praktik terbaik industri.',
                    fastDeliveryTitle: 'Pengiriman Cepat',
                    fastDeliveryDesc: 'Proses pengembangan yang efisien dengan waktu penyelesaian yang cepat tanpa mengorbankan kualitas.',
                    passionateTitle: 'Bersemangat',
                    passionateDesc: 'Passion yang tulus untuk pengembangan web dan pembelajaran berkelanjutan dari teknologi baru.',
                    servicesTitle: 'Layanan yang Saya Tawarkan',
                    servicesDesc: 'Solusi pengembangan web komprehensif yang disesuaikan dengan kebutuhan bisnis Anda',
                    webDevTitle: 'Pengembangan Web',
                    webDevDesc: 'Website dan aplikasi web kustom yang dibangun dengan teknologi modern',
                    responsiveTitle: 'Desain Responsif',
                    responsiveDesc: 'Pendekatan mobile-first yang memastikan pengalaman sempurna di semua perangkat',
                    backendTitle: 'Pengembangan Backend',
                    backendDesc: 'Solusi server-side yang kuat dengan Laravel dan PHP',
                    seoTitle: 'Optimasi SEO',
                    seoDesc: 'Optimasi mesin pencari untuk visibilitas dan peringkat yang lebih baik',
                    maintenanceTitle: 'Pemeliharaan',
                    maintenanceDesc: 'Dukungan dan pemeliharaan berkelanjutan untuk aplikasi web Anda',
                    consultationTitle: 'Konsultasi',
                    consultationDesc: 'Nasihat dan bimbingan teknis untuk proyek digital Anda',
                    blogTitle: 'Blog & Artikel',
                    blogDesc: 'Berbagi perjalanan saya dalam pengembangan web, wawasan teknis, dan pengalaman belajar.',
                    filterAll: 'Semua',
                    filterLaravel: 'Laravel',
                    filterMysql: 'MySQL',
                    filterFrontend: 'Frontend',
                    filterCareer: 'Karir',
                    webDevTitle: 'Pengembangan Web',
                    webDevDesc: 'Website dan aplikasi web kustom yang dibangun dengan teknologi modern',
                    responsiveTitle: 'Desain Responsif',
                    responsiveDesc: 'Pendekatan mobile-first yang memastikan pengalaman sempurna di semua perangkat',
                    backendTitle: 'Pengembangan Backend',
                    backendDesc: 'Solusi server-side yang robust dengan Laravel dan PHP',
                    seoTitle: 'Optimasi SEO',
                    seoDesc: 'Optimasi mesin pencari untuk visibilitas dan peringkat yang lebih baik',
                    maintenanceTitle: 'Pemeliharaan',
                    maintenanceDesc: 'Dukungan dan pemeliharaan berkelanjutan untuk aplikasi web Anda',
                    consultationTitle: 'Konsultasi',
                    consultationDesc: 'Nasihat dan panduan teknis untuk proyek digital Anda',
                    featuredProjectsTitle: 'Proyek Unggulan',
                    featuredProjectsDesc: 'Berikut adalah beberapa proyek terbaru saya yang menampilkan keterampilan dan kreativitas saya dalam pengembangan web.',
                    contactTitle: 'Mari Bekerja Sama',
                    contactDesc: 'Siap memulai proyek berikutnya? Mari diskusikan bagaimana saya bisa membantu mewujudkan ide-ide Anda!',
                    sendMessage: 'Kirim Pesan',
                    projectsTitle: 'Proyek Unggulan',
                    projectsDesc: 'Menampilkan karya terbaik saya dan keahlian teknis melalui proyek nyata',
                    project1Title: 'Platform E-Commerce',
                    project1Desc: 'Solusi e-commerce full-stack yang dibangun dengan Laravel, menampilkan autentikasi pengguna, integrasi pembayaran, dan dashboard admin.',
                    project2Title: 'Aplikasi Manajemen Tugas',
                    project2Desc: 'Aplikasi web responsif untuk manajemen proyek dengan update real-time, kolaborasi tim, dan pelacakan kemajuan.',
                    project3Title: 'Dashboard Analytics',
                    project3Desc: 'Dashboard visualisasi data dengan grafik interaktif, metrik real-time, dan fitur pelaporan komprehensif.',
                    viewProject: 'Lihat Proyek',
                    viewAllProjects: 'Lihat Semua Proyek',
                    article1Title: 'Memulai dengan Laravel 11',
                    article1Desc: 'Panduan komprehensif tentang fitur-fitur baru Laravel 11, peningkatan performa, dan cara memulai dengan framework PHP yang powerful ini.',
                    article2Title: 'Optimasi Database MySQL',
                    article2Desc: 'Tips penting untuk mengoptimalkan database MySQL, termasuk strategi indexing, optimasi query, dan teknik tuning performa.',
                    article3Title: 'Membangun Aplikasi Web Responsif',
                    article3Desc: 'Pelajari cara membuat aplikasi web yang indah dan responsif menggunakan pendekatan utility-first Tailwind CSS dan prinsip desain modern.',
                    article4Title: 'Fitur Modern JavaScript ES6+',
                    article4Desc: 'Jelajahi fitur-fitur JavaScript terbaru termasuk arrow functions, destructuring, async/await, dan modules untuk pengembangan web modern.',
                    article5Title: 'Praktik Terbaik Git Workflow',
                    article5Desc: 'Kuasai workflow Git dengan strategi branching, konvensi commit, dan teknik kolaborasi untuk tim pengembangan yang efisien.',
                    article6Title: 'Perjalanan Saya ke Dunia Web Development',
                    article6Desc: 'Berbagi cerita pribadi saya dalam mempelajari web development, tantangan yang dihadapi, dan tips untuk developer pemula yang memulai perjalanan mereka.',
                    viewProject1: 'Lihat Proyek',
                    viewProject2: 'Lihat Proyek',
                    viewProject3: 'Lihat Proyek',
                    viewAllProjects: 'Lihat Semua Proyek',
                    readMore1: 'Baca Selengkapnya',
                    readMore2: 'Baca Selengkapnya',
                    readMore3: 'Baca Selengkapnya',
                    readMore4: 'Baca Selengkapnya',
                    readMore5: 'Baca Selengkapnya',
                    readMore6: 'Baca Selengkapnya',
                    viewAllArticles: 'Lihat Semua Artikel',
                    filterAll: 'Semua',
                    filterLaravel: 'Laravel',
                    filterMysql: 'MySQL',
                    filterFrontend: 'Frontend',
                    filterCareer: 'Karir'
                }
            };

            const t = translations[lang];
            
            // Update navigation (only frontend navbar, avoid admin)
            document.querySelectorAll('a.js-nav-home').forEach(el => {
                el.innerHTML = `<i class="fas fa-home mr-1"></i>${t.home}`;
            });
            
            document.querySelectorAll('a[href*="about"]').forEach(el => {
                el.innerHTML = `<i class="fas fa-user mr-1"></i>${t.about}`;
            });
            
            document.querySelectorAll('a[href*="skills"]').forEach(el => {
                el.innerHTML = `<i class="fas fa-code mr-1"></i>${t.skills}`;
            });
            
            document.querySelectorAll('a[href*="contact"]').forEach(el => {
                el.innerHTML = `<i class="fas fa-envelope mr-1"></i>${t.contact}`;
            });

            // Update hero section if exists
            const heroTitle = document.querySelector('#heroTitle');
            const heroSubtitle = document.querySelector('#heroSubtitle');
            const heroDescription = document.querySelector('#heroDescription');
            const viewProjectsBtn = document.querySelector('#viewProjectsBtn');
            const downloadCvBtn = document.querySelector('#downloadCvBtn');
            
            if (heroTitle) heroTitle.innerHTML = t.heroTitle;
            if (heroSubtitle) heroSubtitle.textContent = t.heroSubtitle;
            if (heroDescription) heroDescription.textContent = t.heroDescription;
            if (viewProjectsBtn) viewProjectsBtn.textContent = t.viewProjects;
            if (downloadCvBtn) downloadCvBtn.textContent = t.downloadCv;

            // Update Why Choose Me section
            const whyChooseMeTitle = document.querySelector('#whyChooseMeTitle');
            const whyChooseMeDesc = document.querySelector('#whyChooseMeDesc');
            const cleanCodeTitle = document.querySelector('#cleanCodeTitle');
            const cleanCodeDesc = document.querySelector('#cleanCodeDesc');
            const fastDeliveryTitle = document.querySelector('#fastDeliveryTitle');
            const fastDeliveryDesc = document.querySelector('#fastDeliveryDesc');
            const passionateTitle = document.querySelector('#passionateTitle');
            const passionateDesc = document.querySelector('#passionateDesc');
            
            if (whyChooseMeTitle) whyChooseMeTitle.textContent = t.whyChooseMeTitle;
            if (whyChooseMeDesc) whyChooseMeDesc.textContent = t.whyChooseMeDesc;
            if (cleanCodeTitle) cleanCodeTitle.textContent = t.cleanCodeTitle;
            if (cleanCodeDesc) cleanCodeDesc.textContent = t.cleanCodeDesc;
            if (fastDeliveryTitle) fastDeliveryTitle.textContent = t.fastDeliveryTitle;
            if (fastDeliveryDesc) fastDeliveryDesc.textContent = t.fastDeliveryDesc;
            if (passionateTitle) passionateTitle.textContent = t.passionateTitle;
            if (passionateDesc) passionateDesc.textContent = t.passionateDesc;

            // Update Services section
            const servicesTitle = document.querySelector('#servicesTitle');
            const servicesDesc = document.querySelector('#servicesDesc');
            
            if (servicesTitle) servicesTitle.textContent = t.servicesTitle;
            if (servicesDesc) servicesDesc.textContent = t.servicesDesc;

            // Update Blog section
            const blogTitle = document.querySelector('#blogTitle');
            const blogDesc = document.querySelector('#blogDesc');
            const filterAll = document.querySelector('#filterAll');
            const filterLaravel = document.querySelector('#filterLaravel');
            const filterMysql = document.querySelector('#filterMysql');
            const filterFrontend = document.querySelector('#filterFrontend');
            const filterCareer = document.querySelector('#filterCareer');
            
            if (blogTitle) blogTitle.textContent = t.blogTitle;
            if (blogDesc) blogDesc.textContent = t.blogDesc;
            if (filterAll) filterAll.innerHTML = `<i class="fas fa-th mr-1"></i>${t.filterAll}`;
            if (filterLaravel) filterLaravel.innerHTML = `<i class="fas fa-code mr-1"></i>${t.filterLaravel}`;
            if (filterMysql) filterMysql.innerHTML = `<i class="fas fa-database mr-1"></i>${t.filterMysql}`;
            if (filterFrontend) filterFrontend.innerHTML = `<i class="fas fa-paint-brush mr-1"></i>${t.filterFrontend}`;
            if (filterCareer) filterCareer.innerHTML = `<i class="fas fa-briefcase mr-1"></i>${t.filterCareer}`;

            // Update Contact section
            const contactTitle = document.querySelector('#contactTitle');
            const contactDesc = document.querySelector('#contactDesc');
            const sendMessageBtn = document.querySelector('#sendMessageBtn');
            
            if (contactTitle) contactTitle.textContent = t.contactTitle;
            if (contactDesc) contactDesc.textContent = t.contactDesc;
            if (sendMessageBtn) sendMessageBtn.innerHTML = `<i class="fas fa-paper-plane mr-2"></i>${t.sendMessage}`;

            // Update Featured Projects section
            const projectsTitle = document.querySelector('#projectsTitle');
            const projectsDesc = document.querySelector('#projectsDesc');
            const project1Title = document.querySelector('#project1Title');
            const project1Desc = document.querySelector('#project1Desc');
            const project2Title = document.querySelector('#project2Title');
            const project2Desc = document.querySelector('#project2Desc');
            const project3Title = document.querySelector('#project3Title');
            const project3Desc = document.querySelector('#project3Desc');
            
            if (projectsTitle) projectsTitle.textContent = t.projectsTitle;
            if (projectsDesc) projectsDesc.textContent = t.projectsDesc;
            if (project1Title) project1Title.textContent = t.project1Title;
            if (project1Desc) project1Desc.textContent = t.project1Desc;
            if (project2Title) project2Title.textContent = t.project2Title;
            if (project2Desc) project2Desc.textContent = t.project2Desc;
            if (project3Title) project3Title.textContent = t.project3Title;
            if (project3Desc) project3Desc.textContent = t.project3Desc;

            // Update Articles
            const article1Title = document.querySelector('#article1Title');
            const article1Desc = document.querySelector('#article1Desc');
            const article2Title = document.querySelector('#article2Title');
            const article2Desc = document.querySelector('#article2Desc');
            const article3Title = document.querySelector('#article3Title');
            const article3Desc = document.querySelector('#article3Desc');
            const article4Title = document.querySelector('#article4Title');
            const article4Desc = document.querySelector('#article4Desc');
            const article5Title = document.querySelector('#article5Title');
            const article5Desc = document.querySelector('#article5Desc');
            const article6Title = document.querySelector('#article6Title');
            const article6Desc = document.querySelector('#article6Desc');
            
            if (article1Title) article1Title.textContent = t.article1Title;
            if (article1Desc) article1Desc.textContent = t.article1Desc;
            if (article2Title) article2Title.textContent = t.article2Title;
            if (article2Desc) article2Desc.textContent = t.article2Desc;
            if (article3Title) article3Title.textContent = t.article3Title;
            if (article3Desc) article3Desc.textContent = t.article3Desc;
            if (article4Title) article4Title.textContent = t.article4Title;
            if (article4Desc) article4Desc.textContent = t.article4Desc;
            if (article5Title) article5Title.textContent = t.article5Title;
            if (article5Desc) article5Desc.textContent = t.article5Desc;
            if (article6Title) article6Title.textContent = t.article6Title;
            if (article6Desc) article6Desc.textContent = t.article6Desc;

            // Update Buttons
            const viewProject1 = document.querySelector('#viewProject1 span');
            const viewProject2 = document.querySelector('#viewProject2 span');
            const viewProject3 = document.querySelector('#viewProject3 span');
            const viewAllProjectsBtn = document.querySelector('#viewAllProjectsBtn');
            const readMore1 = document.querySelector('#readMore1 span');
            const readMore2 = document.querySelector('#readMore2 span');
            const readMore3 = document.querySelector('#readMore3 span');
            const readMore4 = document.querySelector('#readMore4 span');
            const readMore5 = document.querySelector('#readMore5 span');
            const readMore6 = document.querySelector('#readMore6 span');
            const viewAllArticlesBtn = document.querySelector('#viewAllArticlesBtn');
            const filterAllBtn = document.querySelector('#filterAll');
            const filterLaravelBtn = document.querySelector('#filterLaravel');
            const filterMysqlBtn = document.querySelector('#filterMysql');
            const filterFrontendBtn = document.querySelector('#filterFrontend');
            const filterCareerBtn = document.querySelector('#filterCareer');
            
            if (viewProject1) viewProject1.textContent = t.viewProject1;
            if (viewProject2) viewProject2.textContent = t.viewProject2;
            if (viewProject3) viewProject3.textContent = t.viewProject3;
            if (viewAllProjectsBtn) viewAllProjectsBtn.innerHTML = `<i class="fas fa-folder-open mr-2"></i>${t.viewAllProjects}`;
            if (readMore1) readMore1.textContent = t.readMore1;
            if (readMore2) readMore2.textContent = t.readMore2;
            if (readMore3) readMore3.textContent = t.readMore3;
            if (readMore4) readMore4.textContent = t.readMore4;
            if (readMore5) readMore5.textContent = t.readMore5;
            if (readMore6) readMore6.textContent = t.readMore6;
            if (viewAllArticlesBtn) viewAllArticlesBtn.innerHTML = `<i class="fas fa-newspaper mr-2"></i>${t.viewAllArticles}`;
            if (filterAllBtn) filterAllBtn.innerHTML = `<i class="fas fa-th mr-1"></i>${t.filterAll}`;
            if (filterLaravelBtn) filterLaravelBtn.innerHTML = `<i class="fas fa-code mr-1"></i>${t.filterLaravel}`;
            if (filterMysqlBtn) filterMysqlBtn.innerHTML = `<i class="fas fa-database mr-1"></i>${t.filterMysql}`;
            if (filterFrontendBtn) filterFrontendBtn.innerHTML = `<i class="fas fa-paint-brush mr-1"></i>${t.filterFrontend}`;
            if (filterCareerBtn) filterCareerBtn.innerHTML = `<i class="fas fa-rocket mr-1"></i>${t.filterCareer}`;

            // Update Services
            const webDevTitle = document.querySelector('#webDevTitle');
            const webDevDesc = document.querySelector('#webDevDesc');
            const responsiveTitle = document.querySelector('#responsiveTitle');
            const responsiveDesc = document.querySelector('#responsiveDesc');
            const backendTitle = document.querySelector('#backendTitle');
            const backendDesc = document.querySelector('#backendDesc');
            const seoTitle = document.querySelector('#seoTitle');
            const seoDesc = document.querySelector('#seoDesc');
            const maintenanceTitle = document.querySelector('#maintenanceTitle');
            const maintenanceDesc = document.querySelector('#maintenanceDesc');
            const consultationTitle = document.querySelector('#consultationTitle');
            const consultationDesc = document.querySelector('#consultationDesc');
            
            if (webDevTitle) webDevTitle.textContent = t.webDevTitle;
            if (webDevDesc) webDevDesc.textContent = t.webDevDesc;
            if (responsiveTitle) responsiveTitle.textContent = t.responsiveTitle;
            if (responsiveDesc) responsiveDesc.textContent = t.responsiveDesc;
            if (backendTitle) backendTitle.textContent = t.backendTitle;
            if (backendDesc) backendDesc.textContent = t.backendDesc;
            if (seoTitle) seoTitle.textContent = t.seoTitle;
            if (seoDesc) seoDesc.textContent = t.seoDesc;
            if (maintenanceTitle) maintenanceTitle.textContent = t.maintenanceTitle;
            if (maintenanceDesc) maintenanceDesc.textContent = t.maintenanceDesc;
            if (consultationTitle) consultationTitle.textContent = t.consultationTitle;
            if (consultationDesc) consultationDesc.textContent = t.consultationDesc;

            // Update Featured Projects
            const featuredProjectsTitle = document.querySelector('#featuredProjectsTitle');
            const featuredProjectsDesc = document.querySelector('#featuredProjectsDesc');
            
            if (featuredProjectsTitle) featuredProjectsTitle.textContent = t.featuredProjectsTitle;
            if (featuredProjectsDesc) featuredProjectsDesc.textContent = t.featuredProjectsDesc;
            } catch (error) {
                console.error('Error updating page content:', error);
            }
        }

        // Initialize with saved language
        try {
            updatePageContent(currentLang);
        } catch (error) {
            console.error('Error initializing language:', error);
        }
    </script>

    <style>
        /* Loading Animations */
        .loading-spinner {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid #f3f3f3;
            border-top: 3px solid #3b82f6;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* Page Load Animation */
        .page-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease-out;
        }
        
        .page-loader.hidden {
            opacity: 0;
            pointer-events: none;
        }
        
        .loader-content {
            text-align: center;
            color: white;
        }
        
        .loader-spinner {
            width: 50px;
            height: 50px;
            border: 4px solid rgba(255, 255, 255, 0.3);
            border-top: 4px solid white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 0 auto 20px;
        }
        
        /* Button Loading States */
        .btn-loading {
            position: relative;
            pointer-events: none;
        }
        
        .btn-loading .btn-text {
            opacity: 0;
        }
        
        .btn-loading .loading-spinner {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        /* Hover Effects */
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        .hover-scale:hover {
            transform: scale(1.05);
        }
        
        /* Pulse Animation */
        .pulse-animation {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        /* Fade In Animation */
        .fade-in {
            animation: fadeInUp 0.6s ease-out;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</body>

</html>

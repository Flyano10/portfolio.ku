@extends('layouts.app')

@section('title', 'About Me - Rafly Juliano | Full-Stack Web Developer')
@section('meta_description', 'Learn more about Rafly Juliano, a passionate full-stack web developer with expertise in Laravel, PHP, MySQL, and modern web technologies. Discover my journey and skills.')
@section('meta_keywords', 'About Rafly Juliano, Web Developer, Full-Stack Developer, Laravel, PHP, MySQL, Skills, Experience, Journey')
@section('meta_author', 'Rafly Juliano')
@section('og_title', 'About Me - Rafly Juliano | Full-Stack Web Developer')
@section('og_description', 'Learn more about Rafly Juliano, a passionate full-stack web developer with expertise in Laravel, PHP, MySQL, and modern web technologies. Discover my journey and skills.')
@section('og_image', asset('images/rafly.jpg.jpeg'))

@section('content')
<!-- HERO SECTION -->
<section class="py-20 bg-gradient-to-br from-blue-50 to-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
            <h1 class="text-4xl md:text-6xl font-bold text-blue-900 mb-4">About Me</h1>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-blue-700 mx-auto mb-4"></div>
            <p class="text-xl text-blue-700 max-w-3xl mx-auto">Passionate web developer ready to contribute to meaningful projects</p>
        </div>
    </div>
</section>

<!-- MAIN CONTENT -->
<section class="py-20 bg-white" data-aos="fade-up">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- PHOTO & PERSONAL INFO -->
            <div class="space-y-8" data-aos="fade-right">
                <div class="relative group">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-blue-600 rounded-2xl blur-xl opacity-20 group-hover:opacity-30 transition-opacity duration-300"></div>
                    <img src="{{ asset('images/rafly.jpg.jpeg') }}" alt="Rafly Juliano" class="relative w-80 h-80 mx-auto rounded-2xl shadow-2xl object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy">
                </div>
                
                <div class="text-center lg:text-left">
                    <h2 class="text-3xl font-bold text-blue-900 mb-2">Rafly Juliano</h2>
                    <p class="text-xl text-blue-600 mb-4">Web Developer</p>
                    <div class="flex justify-center lg:justify-start gap-4">
                        <a href="https://github.com/Flyano10" target="_blank" class="text-blue-600 hover:text-black text-2xl transition-all duration-300 hover:scale-110 hover:animate-pulse"><i class="fab fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/muhammad-rafly-juliano-037688287" target="_blank" class="text-blue-600 hover:text-[#0A66C2] text-2xl transition-all duration-300 hover:scale-110 hover:animate-pulse"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/liianno_?igsh=d2F4bDZxaGMwdDY2" target="_blank" class="text-blue-600 hover:text-[#E4405F] text-2xl transition-all duration-300 hover:scale-110 hover:animate-pulse"><i class="fab fa-instagram"></i></a>
                        <a href="mailto:raflyjuliano62@gmail.com" class="text-blue-600 hover:text-[#EA4335] text-2xl transition-all duration-300 hover:scale-110 hover:animate-pulse"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>

            <!-- STORY & SKILLS -->
            <div class="space-y-8" data-aos="fade-left">
                <!-- My Story -->
                <div>
                    <h3 class="text-2xl font-bold text-blue-900 mb-4">My Journey</h3>
                    <p class="text-blue-800 leading-relaxed mb-4">
                        Started out just curious about how websites work, then got into HTML and CSS. 
                        Got hooked and now I'm really comfortable with Laravel and PHP. 
                        What began as just messing around became a serious thing in web development.
                    </p>
                    <p class="text-blue-800 leading-relaxed mb-4">
                        Now I'm really focused on <strong>Laravel</strong> for backend, <strong>MySQL</strong> for database, 
                        and <strong>Tailwind CSS</strong> for styling. I've built several projects with this stack, 
                        from simple ones to more complex ones. I really enjoy making clean APIs 
                        and optimizing databases.
                    </p>
                    <p class="text-blue-800 leading-relaxed">
                        Still learning and exploring new technologies. Whatever the project, 
                        from e-commerce to portfolios like this one, I always try to give my best.
                    </p>
                </div>


                <!-- Experience & Expertise -->
                <div data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-2xl font-bold text-blue-900 mb-4">Experience & Expertise</h3>
                    <div class="space-y-4">
                        <div class="bg-blue-50 p-4 rounded-lg group hover:shadow-lg transition-all duration-300">
                            <h4 class="font-semibold text-blue-800 mb-2">Backend Development</h4>
                            <p class="text-blue-700 text-sm mb-2">Building scalable server-side applications with Laravel framework</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded group-hover:bg-blue-200 transition-colors duration-300">Laravel</span>
                                <span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded group-hover:bg-blue-200 transition-colors duration-300">PHP</span>
                                <span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded group-hover:bg-blue-200 transition-colors duration-300">MySQL</span>
                                <span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded group-hover:bg-blue-200 transition-colors duration-300">RESTful APIs</span>
                            </div>
                        </div>
                        <div class="bg-blue-50 p-4 rounded-lg group hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                            <h4 class="font-semibold text-blue-800 mb-2">Frontend Development</h4>
                            <p class="text-blue-700 text-sm mb-2">Creating responsive and interactive user interfaces</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded group-hover:bg-blue-200 transition-colors duration-300">HTML5</span>
                                <span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded group-hover:bg-blue-200 transition-colors duration-300">CSS3</span>
                                <span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded group-hover:bg-blue-200 transition-colors duration-300">JavaScript</span>
                                <span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded group-hover:bg-blue-200 transition-colors duration-300">Tailwind CSS</span>
                            </div>
                        </div>
                        <div class="bg-blue-50 p-4 rounded-lg group hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                            <h4 class="font-semibold text-blue-800 mb-2">Development Tools</h4>
                            <p class="text-blue-700 text-sm mb-2">Efficient workflow with modern development tools</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded group-hover:bg-blue-200 transition-colors duration-300">Git & GitHub</span>
                                <span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded group-hover:bg-blue-200 transition-colors duration-300">VS Code</span>
                                <span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded group-hover:bg-blue-200 transition-colors duration-300">Composer</span>
                                <span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded group-hover:bg-blue-200 transition-colors duration-300">Testing</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- What I Can Do -->
                <div data-aos="fade-up" data-aos-delay="500">
                    <h3 class="text-2xl font-bold text-blue-900 mb-4">What I Can Do</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="space-y-3">
                            <div class="group flex items-start">
                                <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-3 mt-1 group-hover:bg-green-100 transition-colors duration-300">
                                    <i class="fas fa-check text-blue-600 text-sm group-hover:text-green-600 transition-colors duration-300"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-blue-800">Full-Stack Web Development</h4>
                                    <p class="text-blue-700 text-sm">Can handle both frontend and backend</p>
                                </div>
                            </div>
                            <div class="group flex items-start">
                                <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-3 mt-1 group-hover:bg-orange-100 transition-colors duration-300">
                                    <i class="fas fa-check text-blue-600 text-sm group-hover:text-orange-600 transition-colors duration-300"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-blue-800">Database Design & Optimization</h4>
                                    <p class="text-blue-700 text-sm">Build efficient and well-structured databases</p>
                                </div>
                            </div>
                            <div class="group flex items-start">
                                <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-3 mt-1 group-hover:bg-purple-100 transition-colors duration-300">
                                    <i class="fas fa-check text-blue-600 text-sm group-hover:text-purple-600 transition-colors duration-300"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-blue-800">API Development</h4>
                                    <p class="text-blue-700 text-sm">Create clean and easy-to-use APIs</p>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div class="group flex items-start">
                                <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-3 mt-1 group-hover:bg-cyan-100 transition-colors duration-300">
                                    <i class="fas fa-check text-blue-600 text-sm group-hover:text-cyan-600 transition-colors duration-300"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-blue-800">Responsive Design</h4>
                                    <p class="text-blue-700 text-sm">Websites that work great on all devices</p>
                                </div>
                            </div>
                            <div class="group flex items-start">
                                <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-3 mt-1 group-hover:bg-yellow-100 transition-colors duration-300">
                                    <i class="fas fa-check text-blue-600 text-sm group-hover:text-yellow-600 transition-colors duration-300"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-blue-800">User Authentication</h4>
                                    <p class="text-blue-700 text-sm">Secure and user-friendly login systems</p>
                                </div>
                            </div>
                            <div class="group flex items-start">
                                <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-3 mt-1 group-hover:bg-pink-100 transition-colors duration-300">
                                    <i class="fas fa-check text-blue-600 text-sm group-hover:text-pink-600 transition-colors duration-300"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-blue-800">Code Optimization</h4>
                                    <p class="text-blue-700 text-sm">Clean and maintainable code</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Goals -->
                <div>
                    <h3 class="text-2xl font-bold text-blue-900 mb-4">Goals & Aspirations</h3>
                    <p class="text-blue-800 leading-relaxed mb-4">
                        Still learning and improving my skills in web development. 
                        Want to become a solid full-stack developer who can 
                        build projects that are useful for many people.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CALL TO ACTION -->
<section class="py-20 bg-gradient-to-br from-blue-600 to-blue-800 text-white" data-aos="fade-up">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4" data-aos="fade-up" data-aos-delay="200">Ready to Work Together?</h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="300">
            I'm ready to contribute to development projects and take on challenging opportunities. 
            Let's discuss how I can help with your project!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
            <a href="#contact" class="bg-white text-blue-600 hover:bg-blue-50 px-8 py-3 rounded-full font-semibold shadow-lg hover:shadow-xl transition-all duration-200">
                Get In Touch
            </a>
            <a href="{{ asset('cv/CV-Raflyjuliano..pdf') }}" download class="border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-3 rounded-full font-semibold transition-all duration-200">
                Download CV
            </a>
        </div>
    </div>
</section>
@endsection

@section('title', 'About Me - Rafly Juliano')
@section('meta_description', 'About Rafly Juliano, a passionate web developer with expertise in Laravel, PHP, and modern web technologies. Ready to contribute to meaningful development projects.')
@section('meta_keywords', 'about rafly juliano, web developer, laravel developer, php developer, indonesia')
@section('meta_author', 'Rafly Juliano')
@section('og_title', 'About Me - Rafly Juliano')
@section('og_description', 'About Rafly Juliano, a passionate web developer with expertise in Laravel, PHP, and modern web technologies. Ready to contribute to meaningful development projects.')

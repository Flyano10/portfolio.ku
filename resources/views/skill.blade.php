@extends('layouts.app')

@section('title', 'Skills & Expertise - Rafly Juliano | Web Developer')
@section('meta_description', 'Explore the technical skills and expertise of Rafly Juliano, including Laravel, PHP, MySQL, JavaScript, HTML5, CSS3, and modern web development tools.')
@section('meta_keywords', 'Skills Rafly Juliano, Web Developer Skills, Laravel, PHP, MySQL, JavaScript, HTML5, CSS3, Technical Skills, Expertise')
@section('meta_author', 'Rafly Juliano')
@section('og_title', 'Skills & Expertise - Rafly Juliano | Web Developer')
@section('og_description', 'Explore the technical skills and expertise of Rafly Juliano, including Laravel, PHP, MySQL, JavaScript, HTML5, CSS3, and modern web development tools.')
@section('og_image', asset('images/rafly.jpg.jpeg'))

@section('content')
    <section class="py-20 bg-gradient-to-br from-blue-50 to-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-up">
                <h1 class="text-4xl md:text-6xl font-bold text-blue-900 mb-4">Skills & Expertise</h1>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-blue-700 mx-auto mb-4"></div>
                <p class="text-xl text-blue-700 max-w-3xl mx-auto">Technical skills and technologies I use to bring ideas to
                    life</p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-blue-900 mb-8 text-center">Backend Development</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="group bg-blue-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-red-50">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4 group-hover:bg-red-100 transition-colors duration-300">
                                <i class="fab fa-laravel text-2xl text-blue-600 group-hover:text-red-600 transition-colors duration-300"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-blue-900">Laravel</h3>
                                <p class="text-blue-600">PHP Framework</p>
                            </div>
                        </div>
                        <div class="mb-2 flex justify-between text-sm text-blue-700">
                            <span>Proficiency</span>
                            <span>90%</span>
                        </div>
                        <div class="w-full bg-blue-200 rounded-full h-3">
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full transition-all duration-1000"
                                style="width: 90%"></div>
                        </div>
                    </div>

                    <div class="group bg-blue-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-purple-50">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4 group-hover:bg-purple-100 transition-colors duration-300">
                                <i class="fab fa-php text-2xl text-blue-600 group-hover:text-purple-600 transition-colors duration-300"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-blue-900">PHP</h3>
                                <p class="text-blue-600">Server-side Language</p>
                            </div>
                        </div>
                        <div class="mb-2 flex justify-between text-sm text-blue-700">
                            <span>Proficiency</span>
                            <span>85%</span>
                        </div>
                        <div class="w-full bg-blue-200 rounded-full h-3">
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full transition-all duration-1000"
                                style="width: 85%"></div>
                        </div>
                    </div>

                    <div class="group bg-blue-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-orange-50">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4 group-hover:bg-orange-100 transition-colors duration-300">
                                <i class="fas fa-database text-2xl text-blue-600 group-hover:text-orange-600 transition-colors duration-300"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-blue-900">MySQL</h3>
                                <p class="text-blue-600">Database Management</p>
                            </div>
                        </div>
                        <div class="mb-2 flex justify-between text-sm text-blue-700">
                            <span>Proficiency</span>
                            <span>80%</span>
                        </div>
                        <div class="w-full bg-blue-200 rounded-full h-3">
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full transition-all duration-1000"
                                style="width: 80%"></div>
                        </div>
                    </div>

                    <div class="group bg-blue-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-green-50">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4 group-hover:bg-green-100 transition-colors duration-300">
                                <i class="fas fa-code text-2xl text-blue-600 group-hover:text-green-600 transition-colors duration-300"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-blue-900">API Development</h3>
                                <p class="text-blue-600">RESTful APIs</p>
                            </div>
                        </div>
                        <div class="mb-2 flex justify-between text-sm text-blue-700">
                            <span>Proficiency</span>
                            <span>85%</span>
                        </div>
                        <div class="w-full bg-blue-200 rounded-full h-3">
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full transition-all duration-1000"
                                style="width: 85%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-16" data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-3xl font-bold text-blue-900 mb-8 text-center">Frontend Development</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="group bg-blue-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-orange-50">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4 group-hover:bg-orange-100 transition-colors duration-300">
                                <i class="fab fa-html5 text-2xl text-blue-600 group-hover:text-orange-600 transition-colors duration-300"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-blue-900">HTML5</h3>
                                <p class="text-blue-600">Markup Language</p>
                            </div>
                        </div>
                        <div class="mb-2 flex justify-between text-sm text-blue-700">
                            <span>Proficiency</span>
                            <span>95%</span>
                        </div>
                        <div class="w-full bg-blue-200 rounded-full h-3">
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full transition-all duration-1000"
                                style="width: 95%"></div>
                        </div>
                    </div>

                    <div class="group bg-blue-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-blue-100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4 group-hover:bg-blue-200 transition-colors duration-300">
                                <i class="fab fa-css3-alt text-2xl text-blue-600 group-hover:text-blue-500 transition-colors duration-300"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-blue-900">CSS3</h3>
                                <p class="text-blue-600">Styling Language</p>
                            </div>
                        </div>
                        <div class="mb-2 flex justify-between text-sm text-blue-700">
                            <span>Proficiency</span>
                            <span>90%</span>
                        </div>
                        <div class="w-full bg-blue-200 rounded-full h-3">
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full transition-all duration-1000"
                                style="width: 90%"></div>
                        </div>
                    </div>

                    <div class="group bg-blue-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-yellow-50">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4 group-hover:bg-yellow-100 transition-colors duration-300">
                                <i class="fab fa-js-square text-2xl text-blue-600 group-hover:text-yellow-600 transition-colors duration-300"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-blue-900">JavaScript</h3>
                                <p class="text-blue-600">Programming Language</p>
                            </div>
                        </div>
                        <div class="mb-2 flex justify-between text-sm text-blue-700">
                            <span>Proficiency</span>
                            <span>80%</span>
                        </div>
                        <div class="w-full bg-blue-200 rounded-full h-3">
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full transition-all duration-1000"
                                style="width: 80%"></div>
                        </div>
                    </div>

                    <div class="group bg-blue-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-cyan-50">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4 group-hover:bg-cyan-100 transition-colors duration-300">
                                <i class="fab fa-css3-alt text-2xl text-blue-600 group-hover:text-cyan-600 transition-colors duration-300"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-blue-900">Tailwind CSS</h3>
                                <p class="text-blue-600">Utility-first CSS</p>
                            </div>
                        </div>
                        <div class="mb-2 flex justify-between text-sm text-blue-700">
                            <span>Proficiency</span>
                            <span>85%</span>
                        </div>
                        <div class="w-full bg-blue-200 rounded-full h-3">
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full transition-all duration-1000"
                                style="width: 85%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-16" data-aos="fade-up" data-aos-delay="400">
                <h2 class="text-3xl font-bold text-blue-900 mb-8 text-center">Tools & Version Control</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="group bg-blue-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-orange-50">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4 group-hover:bg-orange-100 transition-colors duration-300">
                                <i class="fab fa-git-alt text-2xl text-blue-600 group-hover:text-orange-600 transition-colors duration-300"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-blue-900">Git</h3>
                                <p class="text-blue-600">Version Control</p>
                            </div>
                        </div>
                        <div class="mb-2 flex justify-between text-sm text-blue-700">
                            <span>Proficiency</span>
                            <span>85%</span>
                        </div>
                        <div class="w-full bg-blue-200 rounded-full h-3">
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full transition-all duration-1000"
                                style="width: 85%"></div>
                        </div>
                    </div>

                    <div class="group bg-blue-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-gray-50">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4 group-hover:bg-gray-100 transition-colors duration-300">
                                <i class="fab fa-github text-2xl text-blue-600 group-hover:text-gray-800 transition-colors duration-300"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-blue-900">GitHub</h3>
                                <p class="text-blue-600">Code Repository</p>
                            </div>
                        </div>
                        <div class="mb-2 flex justify-between text-sm text-blue-700">
                            <span>Proficiency</span>
                            <span>90%</span>
                        </div>
                        <div class="w-full bg-blue-200 rounded-full h-3">
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full transition-all duration-1000"
                                style="width: 90%"></div>
                        </div>
                    </div>

                    <div class="group bg-blue-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-blue-100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4 group-hover:bg-blue-200 transition-colors duration-300">
                                <i class="fas fa-code text-2xl text-blue-600 group-hover:text-blue-500 transition-colors duration-300"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-blue-900">VS Code</h3>
                                <p class="text-blue-600">Code Editor</p>
                            </div>
                        </div>
                        <div class="mb-2 flex justify-between text-sm text-blue-700">
                            <span>Proficiency</span>
                            <span>95%</span>
                        </div>
                        <div class="w-full bg-blue-200 rounded-full h-3">
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full transition-all duration-1000"
                                style="width: 95%"></div>
                        </div>
                    </div>

                    <div class="group bg-blue-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-yellow-50">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4 group-hover:bg-yellow-100 transition-colors duration-300">
                                <i class="fas fa-box text-2xl text-blue-600 group-hover:text-yellow-600 transition-colors duration-300"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-blue-900">Composer</h3>
                                <p class="text-blue-600">PHP Dependency Manager</p>
                            </div>
                        </div>
                        <div class="mb-2 flex justify-between text-sm text-blue-700">
                            <span>Proficiency</span>
                            <span>80%</span>
                        </div>
                        <div class="w-full bg-blue-200 rounded-full h-3">
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full transition-all duration-1000"
                                style="width: 80%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-16" data-aos="fade-up" data-aos-delay="600">
                <h2 class="text-3xl font-bold text-blue-900 mb-8 text-center">Soft Skills & Additional Skills</h2>
                <div class="grid md:grid-cols-4 gap-6">
                    <div
                        class="group bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-xl text-center hover:shadow-lg transition-all duration-300 hover:from-yellow-50 hover:to-yellow-100">
                        <div class="w-16 h-16 bg-blue-200 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-yellow-200 transition-colors duration-300">
                            <i class="fas fa-lightbulb text-2xl text-blue-600 group-hover:text-yellow-600 transition-colors duration-300"></i>
                        </div>
                        <h3 class="text-xl font-bold text-blue-900 mb-2">Problem Solving</h3>
                        <p class="text-blue-700">Analytical thinking and creative solutions</p>
                    </div>

                    <div
                        class="group bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-xl text-center hover:shadow-lg transition-all duration-300 hover:from-green-50 hover:to-green-100">
                        <div class="w-16 h-16 bg-blue-200 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-200 transition-colors duration-300">
                            <i class="fas fa-users text-2xl text-blue-600 group-hover:text-green-600 transition-colors duration-300"></i>
                        </div>
                        <h3 class="text-xl font-bold text-blue-900 mb-2">Team Work</h3>
                        <p class="text-blue-700">Collaboration and communication skills</p>
                    </div>

                    <div
                        class="group bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-xl text-center hover:shadow-lg transition-all duration-300 hover:from-purple-50 hover:to-purple-100">
                        <div class="w-16 h-16 bg-blue-200 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-200 transition-colors duration-300">
                            <i class="fas fa-rocket text-2xl text-blue-600 group-hover:text-purple-600 transition-colors duration-300"></i>
                        </div>
                        <h3 class="text-xl font-bold text-blue-900 mb-2">Fast Learning</h3>
                        <p class="text-blue-700">Quick adaptation to new technologies</p>
                    </div>

                    <div
                        class="group bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-xl text-center hover:shadow-lg transition-all duration-300 hover:from-red-50 hover:to-red-100">
                        <div class="w-16 h-16 bg-blue-200 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-red-200 transition-colors duration-300">
                            <i class="fas fa-tools text-2xl text-blue-600 group-hover:text-red-600 transition-colors duration-300"></i>
                        </div>
                        <h3 class="text-xl font-bold text-blue-900 mb-2">Technical Skills</h3>
                        <p class="text-blue-700">Database (MySQL, SQLite), Deployment (VPS), Testing (PHPUnit)</p>
                    </div>
                </div>
            </div>

            <!-- Projects & Experience Section -->
            <div class="mb-16" data-aos="fade-up" data-aos-delay="800">
                <h2 class="text-3xl font-bold text-blue-900 mb-8 text-center">What I've Built</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Project 1 -->
                    <div class="group bg-white border-2 border-blue-100 rounded-xl p-6 hover:shadow-xl transition-all duration-300 hover:border-purple-300 hover:bg-purple-50">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center mr-4 group-hover:from-purple-500 group-hover:to-purple-600 transition-all duration-300">
                                <i class="fas fa-briefcase text-white text-xl group-hover:scale-110 transition-transform duration-300"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-blue-900">This Portfolio</h3>
                                <p class="text-blue-600 text-sm">Laravel + Tailwind CSS</p>
                            </div>
                        </div>
                        <p class="text-gray-700 text-sm mb-4">Built this complete portfolio website with admin panel, blog system, and contact form using Laravel and Tailwind CSS.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-500">2024</span>
                            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">Live</span>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="group bg-white border-2 border-blue-100 rounded-xl p-6 hover:shadow-xl transition-all duration-300 hover:border-green-300 hover:bg-green-50">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center mr-4 group-hover:from-green-500 group-hover:to-green-600 transition-all duration-300">
                                <i class="fas fa-code text-white text-xl group-hover:scale-110 transition-transform duration-300"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-blue-900">Web Applications</h3>
                                <p class="text-blue-600 text-sm">Laravel Projects</p>
                            </div>
                        </div>
                        <p class="text-gray-700 text-sm mb-4">Developed several web applications using Laravel framework, including CRUD operations, authentication, and API development.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-500">2023 - Present</span>
                            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">Multiple</span>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div class="group bg-white border-2 border-blue-100 rounded-xl p-6 hover:shadow-xl transition-all duration-300 hover:border-orange-300 hover:bg-orange-50">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center mr-4 group-hover:from-orange-500 group-hover:to-orange-600 transition-all duration-300">
                                <i class="fas fa-database text-white text-xl group-hover:scale-110 transition-transform duration-300"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-blue-900">Database Projects</h3>
                                <p class="text-blue-600 text-sm">MySQL + Laravel</p>
                            </div>
                        </div>
                        <p class="text-gray-700 text-sm mb-4">Created and optimized MySQL databases for various projects, including user management and data storage systems.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-500">2023 - Present</span>
                            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">Optimized</span>
                        </div>
                    </div>

                    <!-- Experience 1 -->
                    <div class="group bg-white border-2 border-blue-100 rounded-xl p-6 hover:shadow-xl transition-all duration-300 hover:border-yellow-300 hover:bg-yellow-50">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center mr-4 group-hover:from-yellow-500 group-hover:to-yellow-600 transition-all duration-300">
                                <i class="fas fa-graduation-cap text-white text-xl group-hover:scale-110 transition-transform duration-300"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-blue-900">Self-Taught Developer</h3>
                                <p class="text-blue-600 text-sm">Continuous Learning</p>
                            </div>
                        </div>
                        <p class="text-gray-700 text-sm mb-4">Learned web development through online resources, tutorials, and hands-on practice. Built projects to apply new skills.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-500">2023 - Present</span>
                            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">Active</span>
                        </div>
                    </div>

                    <!-- Experience 2 -->
                    <div class="group bg-white border-2 border-blue-100 rounded-xl p-6 hover:shadow-xl transition-all duration-300 hover:border-pink-300 hover:bg-pink-50">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center mr-4 group-hover:from-pink-500 group-hover:to-pink-600 transition-all duration-300">
                                <i class="fas fa-palette text-white text-xl group-hover:scale-110 transition-transform duration-300"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-blue-900">UI/UX Design</h3>
                                <p class="text-blue-600 text-sm">Responsive Design</p>
                            </div>
                        </div>
                        <p class="text-gray-700 text-sm mb-4">Created responsive and user-friendly interfaces using HTML, CSS, JavaScript, and Tailwind CSS for various projects.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-500">2023 - Present</span>
                            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">Responsive</span>
                        </div>
                    </div>

                    <!-- Experience 3 -->
                    <div class="group bg-white border-2 border-blue-100 rounded-xl p-6 hover:shadow-xl transition-all duration-300 hover:border-cyan-300 hover:bg-cyan-50">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-lg flex items-center justify-center mr-4 group-hover:from-cyan-500 group-hover:to-cyan-600 transition-all duration-300">
                                <i class="fas fa-rocket text-white text-xl group-hover:scale-110 transition-transform duration-300"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-blue-900">Future Projects</h3>
                                <p class="text-blue-600 text-sm">Always Learning</p>
                            </div>
                        </div>
                        <p class="text-gray-700 text-sm mb-4">Continuously working on new projects and learning new technologies to expand my skills and build better applications.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-500">Ongoing</span>
                            <span class="bg-indigo-100 text-indigo-800 text-xs px-2 py-1 rounded-full">Growing</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Learning Journey Section -->
            <div class="mb-16" data-aos="fade-up" data-aos-delay="1000">
                <h2 class="text-3xl font-bold text-blue-900 mb-8 text-center">My Learning Journey</h2>
                <div class="relative">
                    <!-- Timeline Line -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-gradient-to-b from-blue-200 to-blue-400 rounded-full"></div>
                    
                    <!-- Timeline Items -->
                    <div class="space-y-12">
                        <!-- 2023 -->
                        <div class="relative flex items-center">
                            <div class="w-1/2 pr-8 text-right">
                                <div class="group bg-white border-2 border-blue-200 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:border-green-400 hover:bg-green-50">
                                    <div class="flex items-center mb-3">
                                        <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center mr-3 group-hover:bg-green-500 transition-colors duration-300">
                                            <i class="fas fa-play text-white group-hover:scale-110 transition-transform duration-300"></i>
                                        </div>
                                        <h3 class="text-lg font-bold text-blue-900">Started Web Development</h3>
                                    </div>
                                    <p class="text-gray-700 text-sm">Began learning HTML, CSS, and JavaScript. Built my first simple websites and got hooked on web development.</p>
                                    <span class="text-xs text-blue-600 font-semibold">2023</span>
                                </div>
                            </div>
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-blue-500 rounded-full border-4 border-white shadow-lg"></div>
                            <div class="w-1/2 pl-8"></div>
                        </div>

                        <!-- Mid 2023 -->
                        <div class="relative flex items-center">
                            <div class="w-1/2 pr-8"></div>
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-blue-500 rounded-full border-4 border-white shadow-lg"></div>
                            <div class="w-1/2 pl-8">
                                <div class="group bg-white border-2 border-blue-200 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:border-purple-400 hover:bg-purple-50">
                                    <div class="flex items-center mb-3">
                                        <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center mr-3 group-hover:bg-purple-500 transition-colors duration-300">
                                            <i class="fas fa-code text-white group-hover:scale-110 transition-transform duration-300"></i>
                                        </div>
                                        <h3 class="text-lg font-bold text-blue-900">PHP & Laravel</h3>
                                    </div>
                                    <p class="text-gray-700 text-sm">Dived deep into PHP and discovered Laravel framework. Started building more complex web applications.</p>
                                    <span class="text-xs text-blue-600 font-semibold">Mid 2023</span>
                                </div>
                            </div>
                        </div>

                        <!-- 2024 -->
                        <div class="relative flex items-center">
                            <div class="w-1/2 pr-8 text-right">
                                <div class="group bg-white border-2 border-purple-200 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:border-orange-400 hover:bg-orange-50">
                                    <div class="flex items-center mb-3">
                                        <div class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center mr-3 group-hover:bg-orange-500 transition-colors duration-300">
                                            <i class="fas fa-database text-white group-hover:scale-110 transition-transform duration-300"></i>
                                        </div>
                                        <h3 class="text-lg font-bold text-blue-900">Database & Advanced Skills</h3>
                                    </div>
                                    <p class="text-gray-700 text-sm">Mastered MySQL, learned Tailwind CSS, and improved my Git/GitHub skills. Built this portfolio website.</p>
                                    <span class="text-xs text-blue-600 font-semibold">2024</span>
                                </div>
                            </div>
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-blue-500 rounded-full border-4 border-white shadow-lg"></div>
                            <div class="w-1/2 pl-8"></div>
                        </div>

                        <!-- Future -->
                        <div class="relative flex items-center">
                            <div class="w-1/2 pr-8"></div>
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-blue-500 rounded-full border-4 border-white shadow-lg"></div>
                            <div class="w-1/2 pl-8">
                                <div class="group bg-white border-2 border-blue-200 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:border-cyan-400 hover:bg-cyan-50">
                                    <div class="flex items-center mb-3">
                                        <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center mr-3 group-hover:bg-cyan-500 transition-colors duration-300">
                                            <i class="fas fa-rocket text-white group-hover:scale-110 transition-transform duration-300"></i>
                                        </div>
                                        <h3 class="text-lg font-bold text-blue-900">Future Goals</h3>
                                    </div>
                                    <p class="text-gray-700 text-sm">Continue learning new technologies, contribute to open source projects, and build amazing web applications.</p>
                                    <span class="text-xs text-blue-600 font-semibold">Ongoing</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-br from-blue-600 to-blue-800 text-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to See My Work?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Check out my projects to see these skills in action.
                Let's discuss how I can contribute to your next project!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                <a href="#projects"
                    class="bg-white text-blue-600 hover:bg-blue-50 px-8 py-3 rounded-full font-semibold shadow-lg hover:shadow-xl transition-all duration-200">
                    View Projects
                </a>
                <a href="#contact"
                    class="border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-3 rounded-full font-semibold transition-all duration-200">
                    Get In Touch
                </a>
            </div>

            <div class="flex justify-center gap-6 mt-8">
                <a href="https://github.com/Flyano10" target="_blank"
                    class="group bg-white/10 hover:bg-white/20 backdrop-blur-sm rounded-full p-3 transition-all duration-300 hover:scale-110 hover:shadow-lg">
                    <i class="fab fa-github text-2xl text-white group-hover:text-gray-800 transition-colors duration-300"></i>
                </a>
                <a href="https://www.linkedin.com/in/muhammad-rafly-juliano-037688287" target="_blank"
                    class="group bg-white/10 hover:bg-white/20 backdrop-blur-sm rounded-full p-3 transition-all duration-300 hover:scale-110 hover:shadow-lg">
                    <i class="fab fa-linkedin text-2xl text-white group-hover:text-blue-400 transition-colors duration-300"></i>
                </a>
                <a href="https://www.instagram.com/liianno_?igsh=d2F4bDZxaGMwdDY2" target="_blank"
                    class="group bg-white/10 hover:bg-white/20 backdrop-blur-sm rounded-full p-3 transition-all duration-300 hover:scale-110 hover:shadow-lg">
                    <i class="fab fa-instagram text-2xl text-white group-hover:text-pink-400 transition-colors duration-300"></i>
                </a>
                <a href="mailto:raflyjuliano62@gmail.com"
                    class="group bg-white/10 hover:bg-white/20 backdrop-blur-sm rounded-full p-3 transition-all duration-300 hover:scale-110 hover:shadow-lg">
                    <i class="fas fa-envelope text-2xl text-white group-hover:text-red-400 transition-colors duration-300"></i>
                </a>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('content')
<!-- HERO SECTION -->
<section class="py-20 bg-gradient-to-br from-blue-50 to-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
            <h1 class="text-4xl md:text-6xl font-bold text-blue-900 mb-4">Get In Touch</h1>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-blue-700 mx-auto mb-4"></div>
            <p class="text-xl text-blue-700 max-w-3xl mx-auto">Ready to start your next project? Let's discuss how I can help bring your ideas to life!</p>
        </div>
    </div>
</section>

<!-- MAIN CONTENT -->
<section class="py-20 bg-white" data-aos="fade-up">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-16">
            <!-- CONTACT INFO -->
            <div class="space-y-8" data-aos="fade-right">
                <div>
                    <h2 class="text-3xl font-bold text-blue-900 mb-6">Let's Connect</h2>
                    <p class="text-lg text-blue-700 mb-8">
                        I'm always excited to work on new projects and collaborate with amazing people. 
                        Whether you have a specific project in mind or just want to chat about web development, 
                        I'd love to hear from you!
                    </p>
                </div>

                <!-- Contact Methods -->
                <div class="space-y-6">
                    <div class="group flex items-center p-4 bg-blue-50 rounded-xl hover:bg-red-50 transition-all duration-300">
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mr-4 group-hover:bg-red-500 transition-colors duration-300">
                            <i class="fas fa-envelope text-white group-hover:scale-110 transition-transform duration-300"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-blue-900">Email</h3>
                            <a href="mailto:raflyjuliano62@gmail.com" class="text-blue-600 hover:text-red-600 transition-colors duration-300">raflyjuliano62@gmail.com</a>
                        </div>
                    </div>

                    <div class="group flex items-center p-4 bg-blue-50 rounded-xl hover:bg-gray-50 transition-all duration-300">
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mr-4 group-hover:bg-gray-800 transition-colors duration-300">
                            <i class="fab fa-github text-white group-hover:scale-110 transition-transform duration-300"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-blue-900">GitHub</h3>
                            <a href="https://github.com/raflyjuliano" target="_blank" class="text-blue-600 hover:text-gray-800 transition-colors duration-300">github.com/raflyjuliano</a>
                        </div>
                    </div>

                    <div class="group flex items-center p-4 bg-blue-50 rounded-xl hover:bg-blue-100 transition-all duration-300">
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mr-4 group-hover:bg-blue-700 transition-colors duration-300">
                            <i class="fab fa-linkedin text-white group-hover:scale-110 transition-transform duration-300"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-blue-900">LinkedIn</h3>
                            <a href="https://linkedin.com/in/raflyjuliano" target="_blank" class="text-blue-600 hover:text-blue-800 transition-colors duration-300">linkedin.com/in/raflyjuliano</a>
                        </div>
                    </div>

                    <div class="group flex items-center p-4 bg-blue-50 rounded-xl hover:bg-pink-50 transition-all duration-300">
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mr-4 group-hover:bg-pink-500 transition-colors duration-300">
                            <i class="fab fa-instagram text-white group-hover:scale-110 transition-transform duration-300"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-blue-900">Instagram</h3>
                            <a href="https://www.instagram.com/liianno_?igsh=d2F4bDZxaGMwdDY2" target="_blank" class="text-blue-600 hover:text-pink-600 transition-colors duration-300">@liianno_</a>
                        </div>
                    </div>
                </div>

                <!-- Response Time -->
                <div class="bg-gradient-to-r from-blue-100 to-blue-200 p-6 rounded-xl">
                    <div class="flex items-center mb-3">
                        <i class="fas fa-clock text-blue-600 mr-3"></i>
                        <h3 class="font-semibold text-blue-900">Response Time</h3>
                    </div>
                    <p class="text-blue-700 text-sm">
                        I typically respond within 24 hours. For urgent projects, 
                        feel free to mention it in your message!
                    </p>
                </div>
            </div>

            <!-- CONTACT FORM -->
            <div data-aos="fade-left">
                <div class="bg-white border-2 border-blue-100 rounded-2xl p-8 shadow-lg">
                    <h2 class="text-2xl font-bold text-blue-900 mb-6">Send a Message</h2>
                    
                    @if(session('success'))
                        <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                            <i class="fas fa-check-circle mr-2"></i>{{ session('success') }}
                        </div>
                    @endif
                    
                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-blue-900 mb-2">Name *</label>
                                <input type="text" id="name" name="name" required 
                                       class="w-full px-4 py-3 border border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-300"
                                       placeholder="Your full name">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-blue-900 mb-2">Email *</label>
                                <input type="email" id="email" name="email" required 
                                       class="w-full px-4 py-3 border border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-300"
                                       placeholder="your.email@example.com">
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-blue-900 mb-2">Subject *</label>
                            <input type="text" id="subject" name="subject" required 
                                   class="w-full px-4 py-3 border border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-300"
                                   placeholder="What's this about?">
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-blue-900 mb-2">Message *</label>
                            <textarea id="message" name="message" rows="5" required 
                                      class="w-full px-4 py-3 border border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-300 resize-none"
                                      placeholder="Tell me about your project, timeline, and any specific requirements..."></textarea>
                        </div>

                        <button type="submit" 
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 hover:scale-105 hover:shadow-lg">
                            <i class="fas fa-paper-plane mr-2"></i>Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ADDITIONAL INFO -->
<section class="py-20 bg-blue-50" data-aos="fade-up">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-blue-900 mb-4">Why Work With Me?</h2>
            <p class="text-lg text-blue-700 max-w-2xl mx-auto">
                I bring a unique combination of technical expertise, creative problem-solving, and dedication to every project.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="group text-center p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-green-50" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-500 transition-colors duration-300">
                    <i class="fas fa-code text-white text-2xl group-hover:scale-110 transition-transform duration-300"></i>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-2">Clean Code</h3>
                <p class="text-blue-700">Writing maintainable, scalable, and well-documented code that follows industry best practices.</p>
            </div>

            <div class="group text-center p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-orange-50" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-orange-500 transition-colors duration-300">
                    <i class="fas fa-rocket text-white text-2xl group-hover:scale-110 transition-transform duration-300"></i>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-2">Fast Delivery</h3>
                <p class="text-blue-700">Efficient development process with quick turnaround times without compromising quality.</p>
            </div>

            <div class="group text-center p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-pink-50" data-aos="fade-up" data-aos-delay="400">
                <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-pink-500 transition-colors duration-300">
                    <i class="fas fa-heart text-white text-2xl group-hover:scale-110 transition-transform duration-300"></i>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-2">Passionate</h3>
                <p class="text-blue-700">Genuine passion for web development and continuous learning of new technologies.</p>
            </div>
        </div>
    </div>
</section>

<!-- CALL TO ACTION -->
<section class="py-20 bg-gradient-to-br from-blue-600 to-blue-800 text-white" data-aos="fade-up">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4" data-aos="fade-up" data-aos-delay="200">Ready to Start Your Project?</h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="300">
            Let's discuss your ideas and create something amazing together. 
            I'm excited to hear about your project!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
            <a href="mailto:raflyjuliano62@gmail.com" class="bg-white text-blue-600 hover:bg-blue-50 px-8 py-3 rounded-full font-semibold shadow-lg hover:shadow-xl transition-all duration-200">
                <i class="fas fa-envelope mr-2"></i>Send Email
            </a>
            <a href="{{ asset('cv/CV-Raflyjuliano..pdf') }}" download class="border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-3 rounded-full font-semibold transition-all duration-200">
                <i class="fas fa-download mr-2"></i>Download CV
            </a>
        </div>
    </div>
</section>
@endsection

@section('title', 'Contact Me - Rafly Juliano | Web Developer')
@section('meta_description', 'Contact Rafly Juliano for web development projects, collaborations, or inquiries. Send a message directly through the form or connect via social media.')
@section('meta_keywords', 'Contact Rafly Juliano, Web Developer Contact, Laravel Developer Contact, Hire Web Developer, Project Inquiry')
@section('meta_author', 'Rafly Juliano')
@section('og_title', 'Contact Me - Rafly Juliano | Web Developer')
@section('og_description', 'Contact Rafly Juliano for web development projects, collaborations, or inquiries. Send a message directly through the form or connect via social media.')
@section('og_image', asset('images/rafly.jpg.jpeg'))

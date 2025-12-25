<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Rafly Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-blue-50 to-white min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg border-b border-blue-100">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="text-2xl font-bold text-blue-600">Rafly <span class="text-sm font-normal text-blue-400">Admin</span></div>
                <div class="flex items-center space-x-6">
                    <a href="/" class="text-blue-600 hover:text-blue-800 transition-colors duration-300 flex items-center">
                        <i class="fas fa-home mr-2"></i>Home
                    </a>
                    <a href="/admin/projects" class="text-blue-600 hover:text-blue-800 transition-colors duration-300 flex items-center">
                        <i class="fas fa-folder mr-2"></i>Projects
                    </a>
                    <a href="/admin/blog" class="text-blue-600 hover:text-blue-800 transition-colors duration-300 flex items-center">
                        <i class="fas fa-blog mr-2"></i>Blog
                    </a>
                    <a href="/admin/kontak" class="text-blue-600 hover:text-blue-800 transition-colors duration-300 flex items-center">
                        <i class="fas fa-envelope mr-2"></i>Messages
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="bg-gradient-to-r from-red-500 to-red-600 text-white px-6 py-2 rounded-full hover:from-red-600 hover:to-red-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                            <i class="fas fa-sign-out-alt mr-2"></i>Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="min-h-screen py-8">
        <div class="max-w-7xl mx-auto px-4">
            <!-- Welcome Section -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white rounded-xl shadow-xl p-8 mb-8 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-10 rounded-full transform translate-x-16 -translate-y-16"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-white opacity-5 rounded-full transform -translate-x-12 translate-y-12"></div>
                <div class="relative z-10">
                    <h1 class="text-4xl font-bold mb-3 flex items-center">
                        <i class="fas fa-tachometer-alt mr-3 text-blue-200"></i>
                        Selamat Datang di Admin Panel!
                    </h1>
                    <p class="text-xl text-blue-100 mb-2">Kelola portfolio Anda dengan mudah dari dashboard ini.</p>
                    <p class="text-blue-200 text-sm">Logged in as: <span class="font-semibold">{{ auth()->user()->name }}</span></p>
                </div>
            </div>

            <!-- Statistics Cards -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-12">
                <!-- Total Projects -->
                <div class="bg-white/80 backdrop-blur-sm border border-blue-100 rounded-2xl p-5 hover:bg-white transition-all duration-300">
                    <div class="text-center">
                        <div class="w-12 h-12 bg-blue-100 rounded-full mx-auto mb-3 flex items-center justify-center">
                            <i class="fas fa-folder text-blue-600 text-lg"></i>
                        </div>
                        <div class="text-3xl font-bold text-blue-900 mb-1">{{ $stats['projects'] ?? 0 }}</div>
                        <div class="text-sm text-blue-600">Projects</div>
                    </div>
                </div>

                <!-- Blog Posts -->
                <div class="bg-white/80 backdrop-blur-sm border border-blue-100 rounded-2xl p-5 hover:bg-white transition-all duration-300">
                    <div class="text-center">
                        <div class="w-12 h-12 bg-blue-100 rounded-full mx-auto mb-3 flex items-center justify-center">
                            <i class="fas fa-edit text-blue-600 text-lg"></i>
                        </div>
                        <div class="text-3xl font-bold text-blue-900 mb-1">{{ $stats['posts'] ?? 0 }}</div>
                        <div class="text-sm text-blue-600">Blog Posts</div>
                    </div>
                </div>

                <!-- Messages -->
                <div class="bg-white/80 backdrop-blur-sm border border-blue-100 rounded-2xl p-5 hover:bg-white transition-all duration-300">
                    <div class="text-center">
                        <div class="w-12 h-12 bg-blue-100 rounded-full mx-auto mb-3 flex items-center justify-center">
                            <i class="fas fa-envelope text-blue-600 text-lg"></i>
                        </div>
                        <div class="text-3xl font-bold text-blue-900 mb-1">{{ $stats['messages'] ?? 0 }}</div>
                        <div class="text-sm text-blue-600">Messages</div>
                    </div>
                </div>

                <!-- This Week -->
                <div class="bg-white/80 backdrop-blur-sm border border-blue-100 rounded-2xl p-5 hover:bg-white transition-all duration-300">
                    <div class="text-center">
                        <div class="w-12 h-12 bg-blue-100 rounded-full mx-auto mb-3 flex items-center justify-center">
                            <i class="fas fa-calendar text-blue-600 text-lg"></i>
                        </div>
                        <div class="text-3xl font-bold text-blue-900 mb-1">{{ $stats['recent_messages'] ?? 0 }}</div>
                        <div class="text-sm text-blue-600">This Week</div>
                    </div>
                </div>
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
                <!-- Quick Actions -->
                <div class="lg:col-span-2">
                    <h2 class="text-2xl font-bold text-blue-900 mb-6">Quick Actions</h2>
                    <div class="grid gap-4">
                        <a href="/admin/projects/create" class="group flex items-center p-6 bg-white border border-blue-100 rounded-2xl hover:border-blue-300 hover:shadow-md transition-all duration-300">
                            <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mr-5 group-hover:bg-blue-100 transition-colors">
                                <i class="fas fa-plus text-blue-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-semibold text-blue-900 text-lg">Tambah Project Baru</h3>
                                <p class="text-blue-600 text-sm">Buat project portfolio baru</p>
                            </div>
                            <i class="fas fa-arrow-right text-blue-400 group-hover:text-blue-600 group-hover:translate-x-1 transition-all"></i>
                        </a>
                        
                        <a href="/admin/blog/create" class="group flex items-center p-6 bg-white border border-blue-100 rounded-2xl hover:border-blue-300 hover:shadow-md transition-all duration-300">
                            <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mr-5 group-hover:bg-blue-100 transition-colors">
                                <i class="fas fa-edit text-blue-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-semibold text-blue-900 text-lg">Buat Blog Post</h3>
                                <p class="text-blue-600 text-sm">Tulis artikel atau tutorial</p>
                            </div>
                            <i class="fas fa-arrow-right text-blue-400 group-hover:text-blue-600 group-hover:translate-x-1 transition-all"></i>
                        </a>
                        
                        <a href="/admin/kontak" class="group flex items-center p-6 bg-white border border-blue-100 rounded-2xl hover:border-blue-300 hover:shadow-md transition-all duration-300">
                            <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mr-5 group-hover:bg-blue-100 transition-colors">
                                <i class="fas fa-envelope text-blue-600 text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-semibold text-blue-900 text-lg">Lihat Pesan Kontak</h3>
                                <p class="text-blue-600 text-sm">Kelola pesan dari pengunjung</p>
                            </div>
                            <i class="fas fa-arrow-right text-blue-400 group-hover:text-blue-600 group-hover:translate-x-1 transition-all"></i>
                        </a>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div>
                    <h2 class="text-2xl font-bold text-blue-900 mb-6">Recent Activity</h2>
                    <div class="bg-white border border-blue-100 rounded-2xl p-6">
                        <div class="space-y-4">
                            @if(isset($projects) && $projects->count() > 0)
                                @foreach($projects->take(3) as $project)
                                    <div class="flex items-center p-3 bg-blue-50 rounded-xl">
                                        <div class="w-8 h-8 bg-blue-200 rounded-lg flex items-center justify-center mr-3">
                                            <i class="fas fa-folder text-blue-700 text-sm"></i>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-medium text-blue-900 truncate">{{ $project->judul }}</p>
                                            <p class="text-xs text-blue-600">{{ $project->created_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            
                            @if(isset($messages) && $messages->count() > 0)
                                @foreach($messages->take(2) as $message)
                                    <div class="flex items-center p-3 bg-blue-50 rounded-xl">
                                        <div class="w-8 h-8 bg-blue-200 rounded-lg flex items-center justify-center mr-3">
                                            <i class="fas fa-envelope text-blue-700 text-sm"></i>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-medium text-blue-900 truncate">Message from {{ $message->nama }}</p>
                                            <p class="text-xs text-blue-600">{{ $message->created_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            
                            @if((!isset($projects) || $projects->count() == 0) && (!isset($messages) || $messages->count() == 0))
                                <div class="text-center py-8">
                                    <div class="w-16 h-16 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                                        <i class="fas fa-clock text-blue-400 text-xl"></i>
                                    </div>
                                    <p class="text-blue-600">No recent activity</p>
                                    <p class="text-sm text-blue-400">Activity will appear here</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Management Links -->
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-blue-900 mb-6">Management</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Projects -->
                    <a href="/admin/projects" class="group block bg-white border border-blue-100 rounded-2xl p-8 hover:border-blue-300 hover:shadow-md transition-all duration-300">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-blue-100 transition-colors">
                                <i class="fas fa-folder text-blue-600 text-2xl"></i>
                            </div>
                            <h3 class="font-bold text-blue-900 text-lg mb-2">Projects</h3>
                            <p class="text-blue-600 text-sm mb-4">Manage portfolio projects</p>
                            <div class="inline-flex items-center text-blue-500 text-sm font-medium group-hover:text-blue-700">
                                <span class="mr-2">Manage</span>
                                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                            </div>
                        </div>
                    </a>
                    
                    <!-- Blog -->
                    <a href="/admin/blog" class="group block bg-white border border-blue-100 rounded-2xl p-8 hover:border-blue-300 hover:shadow-md transition-all duration-300">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-blue-100 transition-colors">
                                <i class="fas fa-edit text-blue-600 text-2xl"></i>
                            </div>
                            <h3 class="font-bold text-blue-900 text-lg mb-2">Blog</h3>
                            <p class="text-blue-600 text-sm mb-4">Write and publish articles</p>
                            <div class="inline-flex items-center text-blue-500 text-sm font-medium group-hover:text-blue-700">
                                <span class="mr-2">Manage</span>
                                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                            </div>
                        </div>
                    </a>
                    
                    <!-- Contacts -->
                    <a href="/admin/kontak" class="group block bg-white border border-blue-100 rounded-2xl p-8 hover:border-blue-300 hover:shadow-md transition-all duration-300">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-blue-100 transition-colors">
                                <i class="fas fa-envelope text-blue-600 text-2xl"></i>
                            </div>
                            <h3 class="font-bold text-blue-900 text-lg mb-2">Messages</h3>
                            <p class="text-blue-600 text-sm mb-4">View contact messages</p>
                            <div class="inline-flex items-center text-blue-500 text-sm font-medium group-hover:text-blue-700">
                                <span class="mr-2">Manage</span>
                                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
            <!-- Footer -->
            <div class="text-center mt-8 py-6">
                <p class="text-blue-600">&copy; {{ date('Y') }} Rafly Juliano. Admin Dashboard</p>
                <p class="text-sm text-blue-400 mt-1">Built with Laravel & Tailwind CSS</p>
            </div>
        </div>
    </div>
</body>
</html>

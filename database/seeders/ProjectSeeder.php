<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::truncate();

        Project::create([
            'judul' => 'Portfolio Website',
            'deskripsi' => 'A personal portfolio website built with Laravel and Tailwind CSS.',
            'screenshot' => null,
            'demo_url' => 'https://raflyjuliano.com',
            'github_url' => 'https://github.com/raflyjuliano/portfolio',
            'tech_stack' => ['Laravel', 'Tailwind CSS', 'PHP'],
        ]);

        Project::create([
            'judul' => 'Blog Platform',
            'deskripsi' => 'A blog platform with user authentication and admin panel.',
            'screenshot' => null,
            'demo_url' => null,
            'github_url' => 'https://github.com/raflyjuliano/blog-platform',
            'tech_stack' => ['Laravel', 'MySQL', 'Bootstrap'],
        ]);

        Project::create([
            'judul' => 'E-commerce Store',
            'deskripsi' => 'An e-commerce store with shopping cart and payment integration.',
            'screenshot' => null,
            'demo_url' => 'https://store.raflyjuliano.com',
            'github_url' => null,
            'tech_stack' => ['Laravel', 'Stripe', 'Vue.js'],
        ]);
    }
}

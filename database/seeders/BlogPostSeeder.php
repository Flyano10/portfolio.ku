<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class BlogPostSeeder extends Seeder
{
    public function run()
    {
        Post::truncate();

        $posts = [
            // Laravel
            [
                'judul' => 'Building a Scalable Laravel Portfolio',
                'category' => 'laravel',
                'konten' => <<<'MD'
This portfolio was born from a simple idea: every project and story should be easy to update without touching static files. Laravel became the backbone because the routing and templating stay neat, and spinning up new features is painless.

**Architecture in Use**
- Separate controllers for public pages and the admin area
- Blade components for the navbar, hero, and CTAs so I never copy-paste markup
- The `public` storage disk for project screenshots uploaded through the dashboard

**Tooling**
- Sanctum to guard the dashboard authentication
- Laravel Pint plus IDE helpers to keep the code style consistent
- Vite for bundling Tailwind and Alpine assets

Whenever a new project enters the inventory, I just log in, fill out the form, upload screenshots, and it instantly looks polished on the homepage.
MD,
            ],
            [
                'judul' => 'Refactoring the Office Management CRUD with a Service Layer',
                'category' => 'laravel',
                'konten' => <<<'MD'
The old office management project was a controller-fat mess: validation, queries, and business logic all tangled together. During this refactor I split everything into Request classes, a Service layer, and a lightweight Repository so the code becomes readable and testable.

**Refactor Steps**
1. Move validation into FormRequests to slim down the controllers
2. Wrap complex operations (like generating the monthly report) inside dedicated Services
3. Add Policies so admin and staff roles have different permissions

The payoff? Code reviews sped up dramatically, and when requirements change (like adding a tenant status) I only tweak a service instead of risking other controllers.
MD,
            ],
            [
                'judul' => 'Integrating Laravel Sanctum into the Sepatuin Admin Panel',
                'category' => 'laravel',
                'konten' => <<<'MD'
The Sepatuin dashboard needed a secure API for stock management. Sanctum was a perfect fit because it stays lightweight and friendly for a single-page admin.

```
php artisan install:sanctum
php artisan migrate
```

- Token-based auth powers requests coming from the Vue frontend
- I tweaked the custom `EnsureFrontendRequestsAreStateful` middleware so cookie paths line up with the admin subdomain
- An `auth:sanctum` route group shields the stock update and photo upload endpoints

Now the team can update products from their own devices without logging into the primary panel.
MD,
            ],
            [
                'judul' => 'Laravel Deployment Checklist for Production Servers',
                'category' => 'laravel',
                'konten' => <<<'MD'
Deploying Laravel without a checklist equals chaos. I keep this set of steps handy so every rollout to the VPS (nginx + php-fpm) runs smoothly:

1. `php artisan down --render="errors::503"`
2. Pull the release branch, then run `composer install --no-dev --optimize-autoloader`
3. `php artisan migrate --force`
4. `npm run build` and sync the build into `public/build`
5. `php artisan config:cache && php artisan route:cache`
6. `php artisan up`

The checklist lives in the repo (DEPLOYMENT_CHECKLIST.md) so everyone on the team follows the exact same flow.
MD,
            ],

            // MySQL
            [
                'judul' => 'Designing the Office Management Database Schema',
                'category' => 'mysql',
                'konten' => <<<'MD'
The office management system includes tenants, properties, contracts, payments, and maintenance requests. I split everything into well-related primary tables so reporting stays painless.

**Schema Highlights**
- `properties` stores a status column (Available, Occupied, Maintenance)
- `contracts` keeps the rent period, deposit, and reminder date
- `payments` uses an enum for method (cash, transfer) plus an `is_late` flag
- Strict foreign keys expose orphaned data immediately

With this structure the dashboard queries can join across tables without exhausting the server.
MD,
            ],
            [
                'judul' => 'Indexing Strategy for Monthly Finance Reports',
                'category' => 'mysql',
                'konten' => <<<'MD'
As monthly reports piled up, date-filtered queries started to crawl. The fix was a composite index on `payments (property_id, paid_at)` along with a secondary index for `status`. Response time dropped from 1.8 seconds to 320ms.

Bonus tip: run `EXPLAIN` before and after creating the index to confirm MySQL actually uses it.
MD,
            ],
            [
                'judul' => 'Backup and Restore Strategy for Laravel Apps',
                'category' => 'mysql',
                'konten' => <<<'MD'
Every Friday night a cron job runs `mysqldump` and pushes the backup to S3. The file format is `appname_%Y%m%d.sql.gz`. Restores are tested on staging at least once a month so the backup script isn’t just decoration.

Cron snippet:
```
0 23 * * 5 /usr/bin/mysqldump --defaults-extra-file=/etc/mysql/backups.cnf app_db | gzip > /backups/app_$(date +"%Y%m%d").sql.gz
```
MD,
            ],
            [
                'judul' => 'Managing Analytics Data with MySQL Views',
                'category' => 'mysql',
                'konten' => <<<'MD'
For the sneaker e-commerce, the marketing team wanted daily sales reports. I created a `sales_summary_view` that aggregates orders by product category. The frontend simply selects from the view without writing gnarly PHP queries.

Perks of using views:
- Queries stay readable for new developers
- Reusable across multiple dashboards
- Secure thanks to read-only privileges
MD,
            ],

            // Frontend
            [
                'judul' => 'Bringing Sepatuin’s UI to Life with Subtle Animations',
                'category' => 'frontend',
                'konten' => <<<'MD'
Sepatuin stands out because the landing page feels smooth. I used AOS with a few CSS keyframes to highlight new collections. The rule: keep it tasteful—each animation fires once when the element hits the viewport.

**Frontend Stack**
- Tailwind for layout
- Swiper.js to showcase best-selling products
- Alpine.js for the size chart modal

With this approach the page stays lightweight (Lighthouse > 92) yet looks modern.
MD,
            ],
            [
                'judul' => 'Building Reusable Tailwind Components for the Portfolio',
                'category' => 'frontend',
                'konten' => <<<'MD'
Instead of copying Tailwind classes everywhere, I created Blade partials such as `project-card` and `stat-badge`. Each component accepts props so colors or icons can change in seconds.

Usage example:
```
<x-project.card :project="$project" accent="blue" />
```

This made styling maintenance effortless. When it’s time to refresh the brand palette, I edit one file and every component follows suit.
MD,
            ],
            [
                'judul' => 'Handling Form State with Alpine.js',
                'category' => 'frontend',
                'konten' => <<<'MD'
The portfolio contact form shows loading and success states. I wired up a tiny Alpine component to manage visibility without pulling in a heavier framework.

```
<div x-data="contactForm()">
    <form @submit.prevent="submit">
        <!-- fields -->
    </form>
</div>
```

It’s minimal state management, yet perfect for lightweight interactions on a static page.
MD,
            ],
            [
                'judul' => 'Optimizing Core Web Vitals on the Portfolio',
                'category' => 'frontend',
                'konten' => <<<'MD'
Core Web Vitals dipped because the hero image was massive. I converted it to WebP, added `loading="lazy"` for non-critical images, and preloaded the key font from Bunny Fonts.

LCP now sits at 1.9s and total blocking time stays under 150ms on mobile—just what Google PageSpeed wants to see.
MD,
            ],

            // Career
            [
                'judul' => 'From Campus to Freelance: Landing My First Client',
                'category' => 'career',
                'konten' => <<<'MD'
My first paid project arrived while I was still in college. The real challenge wasn’t technical—it was communication: the client wanted feature A, deadline B, and budget C. I learned to write crystal-clear proposals, set realistic timelines, and share frequent updates in Trello.

Biggest lesson: transparency matters more than trying to look perfect.
MD,
            ],
            [
                'judul' => 'Building Personal Branding through Technical Blogging',
                'category' => 'career',
                'konten' => <<<'MD'
This blog started as personal notes but eventually became a digital portfolio. I share Laravel, MySQL, and Tailwind articles on LinkedIn—and companies began reaching out for interviews.

Tips:
- Publish consistently (at least once a month)
- Share the process, not only the finished product
- Include real code so readers gain practical value
MD,
            ],
            [
                'judul' => 'Collaborating Remotely with the Product Team',
                'category' => 'career',
                'konten' => <<<'MD'
Sepatuin is built by a distributed team. Our workflow:
- Quick daily stand-ups on Discord
- Task breakdowns in Notion and GitHub Projects
- Code reviews require at least one reviewer

Remote work thrives when documentation stays tidy and everyone understands the context behind their tasks.
MD,
            ],
            [
                'judul' => 'Lessons from a Project That Never Launched',
                'category' => 'career',
                'konten' => <<<'MD'
I once poured weeks into a membership feature that never shipped. Instead of sulking, I wrote a post-mortem detailing the misses: weak market validation and too many assumptions about users.

That document now reminds me—before starting any new build, validate the users first.
MD,
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
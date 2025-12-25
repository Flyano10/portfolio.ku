<?php

require 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

// Clear existing posts first
App\Models\Post::truncate();
echo "Cleared existing posts.\n";

$posts = [
    [
        'judul' => 'Building My First E-Commerce Website: Lessons Learned',
        'konten' => 'So I just finished working on this e-commerce project and honestly, it was way more challenging than I expected. But also super rewarding!

**What I Actually Built**
Built a full e-commerce site from scratch - you know, the whole package. Product listings, shopping cart, checkout process, payment integration, admin dashboard. The works.

**My Tech Stack:**
- Laravel (backend - love this framework)
- Tailwind CSS (for styling)
- MySQL (database)
- Some vanilla JavaScript for interactive stuff

**The Real Challenges I Faced**

**Database Design Was a Nightmare**
Man, designing the database for e-commerce is no joke. Had to think about products, categories, users, orders, payments... and how they all connect. Spent way too much time on this but glad I did it right in the end.

**Payment Gateway Integration**
This was scary at first. Handling people\'s money? No pressure, right? Had to learn about security, encryption, handling failed payments. Lots of testing with dummy transactions before going live.

**Performance Issues**
Website was slow as hell with lots of products. Had to learn about database indexing, query optimization, image compression. Still learning this stuff tbh.

**Cool Features I Actually Added:**

For customers:
- Search and filter products (took forever to get right)
- Shopping cart that remembers your stuff
- Order tracking system
- User accounts and order history

For admins:
- Add/edit products with image uploads
- Manage orders and update status
- View sales data and analytics
- Customer management

**Code I\'m Proud Of**
Here\'s how I handled adding items to cart:

```php
public function addToCart(Request $request)
{
    // Validate the request
    $request->validate([
        \'product_id\' => \'required|exists:products,id\',
        \'quantity\' => \'required|integer|min:1\'
    ]);
    
    // Add to cart logic here
    $cart = Session::get(\'cart\', []);
    
    if(isset($cart[$request->product_id])) {
        $cart[$request->product_id][\'quantity\'] += $request->quantity;
    } else {
        $product = Product::find($request->product_id);
        $cart[$request->product_id] = [
            "name" => $product->name,
            "quantity" => $request->quantity,
            "price" => $product->price,
            "image" => $product->image
        ];
    }
    
    Session::put(\'cart\', $cart);
    return response()->json([\'message\' => \'Item added to cart!\']);
}
```

**What I Actually Learned**

Planning is everything. I jumped into coding too fast and had to redo stuff multiple times. Now I sketch things out first.

Laravel is awesome but has a learning curve. The documentation is great though.

Security is serious business. Can\'t just YOLO when handling payments and user data.

**The Result**
Pretty happy with how it turned out. Site loads fast, payments work smoothly, and the admin panel makes managing products easy.

**Next Steps**
Want to add a wishlist feature and maybe some product recommendations. Also thinking about making a mobile app version.

If you\'re thinking about building an e-commerce site, just start with something simple. You\'ll learn a ton along the way.'
    ],
    [
        'judul' => 'Why I Built My Own Portfolio Website (And You Should Too)',
        'konten' => 'After building several client projects, I realized I needed a proper portfolio website. Not just to showcase my work, but to actually demonstrate what I can do. Here\'s why I went custom instead of using templates.

**The Problem with Templates**
Most portfolio templates look the same. They\'re generic, boring, and don\'t really show your personality or technical skills. As a developer, your portfolio should reflect your ability to build things from scratch.

**My Approach: Custom Everything**

**Tech Stack I Chose:**
- Laravel for the backend
- Tailwind CSS for styling (love the utility-first approach)
- MySQL for content management
- Vanilla JavaScript for interactions

**Design Philosophy:**
Keep it simple but functional. I went with a clean blue theme that feels professional but not boring. Mobile-first design because most people browse on their phones now.

**Key Features I Built:**

**Dynamic Project Showcase**
Instead of static project cards, I built a system where I can easily add new projects through an admin panel. Each project shows:
- Screenshots and descriptions
- Tech stack badges
- Live demo links
- GitHub repositories

**Blog System**
Added a blog because I wanted to share what I\'ve learned. It\'s integrated with the same admin system, so I can write about my projects and development experiences.

**Admin Dashboard**
Built a custom admin panel where I can:
- Add/edit projects
- Write blog posts
- View contact messages
- See basic analytics

**The Technical Stuff**

**Database Structure:**
```sql
projects (id, title, description, tech_stack, demo_url, github_url, image, created_at)
posts (id, title, content, created_at, updated_at)
contacts (id, name, email, message, created_at)
```

**Laravel Features I Used:**
- Eloquent relationships for project categories
- Blade components for reusable UI elements
- Form validation for contact forms
- File uploads for project images

**Tailwind CSS Benefits:**
- Rapid prototyping with utility classes
- Consistent spacing and colors
- Easy responsive design
- Small bundle size with purging

**Performance Optimizations:**
- Image compression and lazy loading
- CSS and JS minification
- Database query optimization
- Caching for static content

**SEO Implementation:**
- Meta tags for each page
- Open Graph tags for social sharing
- Clean URLs with Laravel routing
- Sitemap generation

**What I Learned**

**User Experience Matters**
Even for a portfolio, UX is crucial. Simple navigation, fast loading, and clear information hierarchy make a huge difference.

**Content is King**
Great design with poor content doesn\'t work. I spent time writing clear project descriptions and meaningful blog posts.

**Mobile is Non-Negotiable**
Most visitors use mobile devices. My mobile-first approach paid off with better engagement and faster load times.

**The Results**
Since launching my portfolio:
- More inquiries from potential clients
- Better showcase of my technical skills
- Platform to share knowledge through blogging
- Improved SEO for my personal brand

**Should You Build Your Own?**
If you\'re a developer, absolutely. It\'s the best way to demonstrate your skills. Even if it\'s not perfect, it shows initiative and technical ability.

**Getting Started Tips:**
1. Start with a simple design - don\'t overcomplicate
2. Focus on content first, then styling
3. Make it mobile-friendly from day one
4. Add a blog to share your learning journey
5. Keep it updated with new projects

Building your own portfolio is an investment in your career. It\'s not just about showing what you can do, but demonstrating how you think and approach problems.'
    ],
    [
        'judul' => 'Asset Property Management System: Laravel + Bootstrap Experience',
        'konten' => 'Recently worked on a property management system that was quite different from my usual projects. This time I used Bootstrap instead of Tailwind CSS, and it gave me a fresh perspective on frontend frameworks.

**Project Background**
Built a comprehensive system for managing rental properties - tracking tenants, lease agreements, payments, maintenance requests, and property details. The client needed something robust but user-friendly.

**Why Bootstrap This Time?**
After being comfortable with Tailwind CSS, I wanted to see how Bootstrap would handle a complex admin interface. Plus, the client\'s team was more familiar with Bootstrap components.

**Bootstrap vs Tailwind: My Honest Take**

**What I Liked About Bootstrap:**
- **Ready-made components:** Tables, modals, forms look good out of the box
- **Faster prototyping:** For complex data tables and admin interfaces
- **Team familiarity:** Easier for other developers to jump in
- **Comprehensive documentation:** Everything is well-documented

**What I Missed from Tailwind:**
- **Customization flexibility:** Harder to create unique designs
- **Bundle size:** Includes everything, even unused components
- **Learning curve:** Had to remember specific Bootstrap class names

**System Features I Built:**

**Property Management:**
- CRUD operations for property listings
- Photo galleries for each property
- Property status tracking (Available, Rented, Under Maintenance)
- Location mapping integration

**Tenant Management:**
- Tenant profiles with contact information
- Lease agreement management
- Payment history tracking
- Document storage (contracts, IDs, etc.)

**Financial Tracking:**
- Monthly rent collection
- Payment reminder system
- Financial reporting dashboard
- Outstanding payments tracking

**Maintenance System:**
- Work order creation and tracking
- Vendor coordination
- Maintenance history logs
- Cost tracking and budgeting

**Technical Implementation:**

**Database Design:**
```sql
properties (id, name, address, type, status, monthly_rent, created_at)
tenants (id, name, phone, email, property_id, lease_start, lease_end, status)
payments (id, tenant_id, amount, payment_date, status, payment_method)
maintenance (id, property_id, description, cost, status, assigned_to, completed_date)
```

**Laravel Backend Features:**
- **Eloquent Relationships:** Complex relationships between Property, Tenant, and Payment models
- **Role-based Access:** Different permissions for Admin, Manager, and Staff
- **File Management:** Secure document and photo uploads
- **Notification System:** Email reminders for payment due dates
- **Reporting:** PDF exports for financial reports

**Bootstrap Frontend Highlights:**

**Data Tables with Bootstrap:**
```html
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Property Name</th>
                <th>Tenant</th>
                <th>Monthly Rent</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Dynamic content here -->
        </tbody>
    </table>
</div>
```

**Modal Dialogs:**
Bootstrap\'s modal system was perfect for quick property edits and tenant information updates.

**Form Styling:**
Bootstrap\'s form components made creating complex forms much faster than building custom styles.

**Performance Considerations:**
- **Pagination:** For large property datasets
- **Search & Filtering:** Quick search across all properties
- **Caching:** Frequently accessed data caching
- **Image Optimization:** Compressed property photos

**User Experience Features:**
- **Dashboard Overview:** Key metrics at a glance
- **Quick Actions:** Fast access to common tasks
- **Responsive Design:** Mobile-friendly for field inspections
- **Data Export:** PDF reports for stakeholders

**Lessons Learned:**

**Framework Choice Impact:**
Bootstrap was great for rapid development with standard admin interfaces. Tailwind would have been better for a more unique, custom design.

**Real-world Requirements:**
Actual business needs often differ from initial planning. The system evolved significantly during development based on user feedback.

**Database Relationships:**
Property management requires complex relationships. Proper planning of the database schema was crucial for system performance.

**Results:**
The system successfully streamlined property management processes, reduced manual paperwork, and improved tenant communication. Response time for handling tenant issues improved significantly.

**My Takeaway:**
Both Bootstrap and Tailwind have their place. Bootstrap excels for rapid development with standard components, especially for admin interfaces. Tailwind is better for custom, unique designs where you want complete control.

For this project, Bootstrap was the right choice. The client got a functional system quickly, and the familiar components made it easier for their team to use.'
    ],
    [
        'judul' => 'Laravel: Why It Became My Go-To PHP Framework',
        'konten' => 'After building multiple projects with different PHP frameworks, I\'ve settled on Laravel as my primary choice. Here\'s why, and how it compares to other frameworks I\'ve used.

**My Framework Journey:**
- **Started with:** Native PHP (painful experience)
- **Tried:** CodeIgniter, CakePHP, Symfony
- **Settled on:** Laravel

**What Makes Laravel Special:**

**1. Developer Experience**
Laravel just feels good to work with. The syntax is clean, the documentation is excellent, and there\'s always a Laravel way to do things.

```php
// Laravel Eloquent - so readable!
$activeUsers = User::with(\'posts\')
                   ->where(\'active\', true)
                   ->orderBy(\'created_at\', \'desc\')
                   ->paginate(10);
```

**2. Rich Ecosystem**
Laravel has an incredible ecosystem:
- **Eloquent ORM:** Makes database work enjoyable
- **Blade Templates:** Powerful templating without the complexity
- **Artisan CLI:** Command-line tools that actually help
- **Laravel Mix:** Asset compilation made simple
- **Laravel Nova:** Beautiful admin panels

**3. Built-in Features**
So many things are included out of the box:
- Authentication system
- Authorization with Gates and Policies
- Queue system for background jobs
- Mail system with beautiful templates
- File storage with multiple drivers
- Caching system
- Session management
- CSRF protection

**Real Projects I\'ve Built:**

**E-Commerce Platform:**
Laravel\'s built-in features saved me tons of time:
- **Authentication:** User registration/login working in minutes
- **Authorization:** Role-based permissions for admin/customer areas
- **Queue Jobs:** Process order confirmation emails in the background
- **File Storage:** Product image uploads with automatic resizing
- **Database:** Eloquent relationships handled complex e-commerce data

**Property Management System:**
Features that made development smooth:
- **Eloquent Relationships:** Property -> Tenant -> Payments relationships
- **Notifications:** Email reminders for payment due dates
- **File Management:** Secure document uploads for contracts
- **Reporting:** Export data to PDF using Laravel packages
- **Caching:** Cache frequently accessed property data

**Portfolio Website:**
Laravel features that helped:
- **Blade Components:** Reusable UI components
- **Form Validation:** Contact forms with validation rules
- **Database Migrations:** Easy database schema management
- **Asset Compilation:** Laravel Mix for processing Tailwind CSS

**Laravel vs Other Frameworks:**

**vs CodeIgniter:**
- **Laravel Pros:** More modern, better ORM, richer ecosystem
- **CodeIgniter Pros:** Smaller footprint, easier learning curve
- **My Choice:** Laravel - worth the extra complexity for long-term maintainability

**vs Symfony:**
- **Laravel Pros:** Better developer experience, more opinionated (good thing)
- **Symfony Pros:** More flexible, component-based architecture
- **My Choice:** Laravel - strikes perfect balance between flexibility and convention

**vs CakePHP:**
- **Laravel Pros:** Better documentation, more active community, modern PHP features
- **CakePHP Pros:** Convention over configuration, rapid development
- **My Choice:** Laravel - better tooling and ecosystem

**Development Speed:**
Laravel\'s conventions and built-in features significantly speed up development. What usually takes weeks can be done in days.

**Code Maintainability:**
Laravel\'s structured approach makes code easier to maintain. Clear separation of concerns with the MVC pattern.

**Team Collaboration:**
Laravel\'s conventions make it easier for team members to understand and contribute to the codebase.

**Performance Considerations:**
Yes, Laravel might be heavier than some frameworks, but:
- **Optimization tools:** Built-in caching, query optimization
- **Scaling options:** Queue workers, database optimization
- **Modern PHP:** Takes advantage of latest PHP features

**When NOT to Choose Laravel:**

**Micro Projects:**
For simple, one-page applications, Laravel might be overkill. Consider Slim or Lumen instead.

**Legacy Systems:**
If you need to integrate with very old systems, lighter frameworks might be a better choice.

**Specific Performance Requirements:**
High-performance applications might benefit from more lightweight frameworks.

**My Recommendation:**

**Choose Laravel if:**
- Building medium to large applications
- Want rapid development with good structure
- Need rich ecosystem and community support
- Value developer experience and code maintainability

**Consider Alternatives if:**
- Building micro-applications
- Have very specific performance requirements
- Working with legacy systems that are complex

**Conclusion:**
Laravel has proven itself in multiple projects. The developer experience, rich features, and strong community make it an excellent choice for most web applications.

Framework choice is personal preference, but Laravel consistently delivers excellent results with an enjoyable development experience.

Every framework has its place, but for PHP web development in 2024, Laravel remains my top choice.'
    ]
];

foreach ($posts as $post) {
    App\Models\Post::create($post);
}

echo "Successfully added " . count($posts) . " English blog posts!\n";
echo "Current post count: " . App\Models\Post::count() . "\n";

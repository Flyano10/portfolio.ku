<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public const CATEGORIES = [
        'laravel' => 'Laravel',
        'mysql' => 'MySQL',
        'frontend' => 'Frontend',
        'career' => 'Career',
    ];

    protected $fillable = ['judul', 'konten', 'category'];

    protected $appends = ['category_label'];

    public static function categoryOptions(): array
    {
        return self::CATEGORIES;
    }

    public function getCategoryLabelAttribute(): string
    {
        return self::CATEGORIES[$this->category] ?? ucfirst($this->category ?? '');
    }

    // Get the route key for the model (for SEO-friendly URLs)
    public function getRouteKeyName()
    {
        return 'id'; // We'll use ID for now, can be changed to slug later
    }
}

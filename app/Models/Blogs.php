<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'image_name',
        'category',
        'type',
        'views',
        'image_alt',
        'description',
        'short_description',
        'affiliate_link',
        'meta_title',
        'meta_description',
    ];

    public function blogcategory()
    {
        return $this->belongsTo(BlogCategory::class, 'category');
    }

}

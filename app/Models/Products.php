<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'image_name',
        'image_alt',
        'description',
        'category_id',
        'short_description',
        'affiliate_link',
        'price',
        'mrp',
        'manufacture',
        'expire',
        'qty',
        'sales',
        'meta_title',
        'meta_description',
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
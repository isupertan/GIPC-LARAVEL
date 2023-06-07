<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NestedPosts extends Model
{
    use HasFactory;
    protected $fillable = [
        "parent_id",  "title", "slug", "image_name", "image_alt", "description", "meta_title", "meta_description"
    ];


    // public function menu()
    // {
    //     return $this->hasOne(Menu::class, 'page_id');
    // }
}

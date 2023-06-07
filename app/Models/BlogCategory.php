<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'image_name',
        'image_alt',
        'description',
        'meta_title',
        'meta_description'
    ];



    public function blogs(){
        return $this->hasMany(Blogs::class, 'category');
    }


}

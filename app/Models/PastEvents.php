<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PastEvents extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'image_name',
        'image_alt',
        'description',
        'meta_title',
        'meta_description',
        'year'
    ];

    // Gallery
    public function galleryimages()
    {
        return $this->hasMany(PastEventGallery::class,'pasteventid');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsors extends Model
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
    ];
}

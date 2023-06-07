<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'designation',
        'company',
        'image_name',
        'image_alt',
        'video_link',
        'feedback'
    ];
}

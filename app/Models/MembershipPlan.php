<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipPlan extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'price',
        'image_name',
        'image_alt',
        'description',
        'meta_title',
        'meta_description',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [

        'image_name',
        'title',
        'facebook',
        'twitter',
        'linkedin',
        'email',
        'whatsapp',
        'footer_description_one',
        'footer_description_two',
        'footer_description_three',
    ];
}

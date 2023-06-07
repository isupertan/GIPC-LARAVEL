<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PastEventGallery extends Model
{
    use HasFactory;
    protected $fillable =[
        'pasteventid',
        'image_name'
    ];
}

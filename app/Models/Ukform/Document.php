<?php

namespace App\Models\Ukform;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable = [
        'primary_id',
        'passport',
        'school_certificate',
        'a_level_certificate',
        'eng_certificate',
        'work_experince',
        'cv',
    ];
}

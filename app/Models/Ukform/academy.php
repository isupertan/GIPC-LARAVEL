<?php

namespace App\Models\Ukform;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class academy extends Model
{
    use HasFactory;
    protected $fillable = [
        'primary_id',
        'inst_name',
        'course',
        'course_study',
        'start_date',
        'end_date',
        'grade',
    ];
}

<?php

namespace App\Models\Ukform;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Langiage extends Model
{
    use HasFactory;
    protected $fillable = [
        'primary_id',
        'eng_qualification',
        'other',
        'grades',
        'achive_date',
    ];
}

<?php

namespace App\Models\Doctor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorList extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image_name',
        'image_alt',
        'description',
        'category_id',
        'short_description',
        'price',
        'priority',
        'meta_title',
        'meta_description',
        'doctor_qualification',
        'doctor_timings',
    ];

    public function category()
    {
        return $this->belongsTo(DoctorCategory::class);
    }
}

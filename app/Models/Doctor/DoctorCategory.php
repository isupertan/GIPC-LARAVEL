<?php

namespace App\Models\Doctor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "slug",
        "image_name",
        "image_alt",
        "description",
        "meta_title",
        "meta_description"
    ];

    public function doctorlist()
    {
        return $this->hasMany(DoctorList::class);
    }
}

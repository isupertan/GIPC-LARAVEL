<?php

namespace App\Models\Ukform;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class immigration extends Model
{
    use HasFactory;

    protected $fillable = [
        'primary_id',
        'birth_country',
        'present_natinality',
        'residence_country',
        'residence_uk',
        'denied_uk',
        'refuse_visa',
        'studied_uk_prev',
        'overstayed_uk',
    ];
}

<?php

namespace App\Models\Ukform;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukhistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'primary_id',
        'uk_visa_number',
        'visa_type',
        'valid_form',
        'valid_to',
        'institution'
        
    ];
}

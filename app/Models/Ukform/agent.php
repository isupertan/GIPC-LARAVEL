<?php

namespace App\Models\Ukform;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agent extends Model
{
    use HasFactory;
    protected $fillable = [
        'primary_id',
        'agent_name',
    ];


}

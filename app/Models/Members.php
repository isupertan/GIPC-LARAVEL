<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'email',
        'organisation',
        'designation',
        'mobile',
        'phone',
        'city',
        'country',
        'image_name',
        'password',
        'membershipplan'
    ];
    public function plan()
    {
        return $this->belongsTo(MembershipPlan::class, 'membershipplan');
    }
}

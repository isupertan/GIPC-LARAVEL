<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','email','phone','order_id','rzp_payment_id','amount','description','address','pan_card','aadhar_card','payment_status'
    ];

}

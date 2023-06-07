<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedbackform extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "uhid",
        "dateofvisit",
        "phone",
        "email",
        "openfeedback",
        "publishable",
        "overallrating",
        "reasonofrating",
        "regularsource",
        "rffer",
        "easeappointment",
        "easeambiance",
        "easebillingtime",
        "easewaitingtime",
        "easediagonosis",
        "investigationappointment",
        "investigationwaiting",
        "investigationreport",
        "nurse",
        "bloodcollection",
        "radiology",
        "technurse",
        "techbloodcollection",
        "techradiology",
        "image_name"
    ];
}

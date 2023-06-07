<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'place',
        'startdate',
        'enddate',
        'venue',
        'organiseremail',
        'organiserphone',
        'image_name',
        'image_alt',
        'video',
        'meta_title',
        'meta_description',
    ];

    public function eventsponsor()
    {
        return $this->hasMany(EventSponsors::class, 'event_id');
    }
    // public function eventsponsorcats()
    // {
    //     return $this->hasMany(EventSponsors::class, 'event_id');
    // }
}

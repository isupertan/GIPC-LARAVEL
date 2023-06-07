<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventSponsors extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_id',
        'sponsor_id',
        'sponsor_category_id'
    ];

    public function sponsorcats()
    {
        return $this->belongsTo(SponsorsCategory::class, 'sponsor_category_id');
    }

    public function sponsorsfull()
    {
        return $this->belongsTo(Sponsors::class, 'sponsor_id');
    }

}

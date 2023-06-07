<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SponsorsCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'title'
    ];

    public function eventsponsorlink()
    {
        return $this->hasMany(EventSponsors::class, 'sponsor_category_id');
    }
}

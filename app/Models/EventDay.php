<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventDay extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_id',
        'title',
        'date',
    ];

    public function agenda()
    {
        return $this->hasMany(EventDayAgenda::class, 'eventdays_id');
    }

}

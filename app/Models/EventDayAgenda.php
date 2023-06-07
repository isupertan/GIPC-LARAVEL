<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventDayAgenda extends Model
{
    use HasFactory;
    protected $fillable = [
        'eventdays_id',
        'title',
        'time',
        'venue',
        'duration',
    ];

    public function speakers()
    {
        return $this->hasMany(EventAgendaSpeakers::class, 'agenda_id');
    }

    
}

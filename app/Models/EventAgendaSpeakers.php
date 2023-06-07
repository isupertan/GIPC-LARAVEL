<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventAgendaSpeakers extends Model
{
    use HasFactory;
    protected $fillable = [
        'eventdays_id',
        'agenda_id',
        'event_id',
        'speaker_id'
    ];

    // public function mainspeakers()
    // {
    //     return $this->belongsTo(Speakers::class,'id');
    // }
}

<?php

namespace App\Models\Ukform;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Primary extends Model
{
    use HasFactory;
    protected $fillable = [
        'f_name',
        'm_name',
        'l_name',
        'address',
        'zip',
        'mobile',
        'email',
    ];

    public function history()
    {
        return $this->hasMany(Ukhistory::class, 'primary_id');
    }

    public function immigration()
    {
        return $this->hasOne(immigration::class, 'primary_id');
    }

    public function language()
    {
        return $this->hasOne(Langiage::class, 'primary_id');
    }

    public function course()
    {
        return $this->hasMany(Course::class, 'primary_id');
    }
    public function document()
    {
        return $this->hasOne(Document::class, 'primary_id');
    }
    public function conenct()
    {
        return $this->hasOne(Conenct::class, 'primary_id');
    }
    public function agent()
    {
        return $this->hasOne(agent::class, 'primary_id');
    }
    public function academy()
    {
        return $this->hasMany(academy::class, 'primary_id');
    }

}

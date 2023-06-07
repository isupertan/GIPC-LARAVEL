<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        "parent_id",
        "page_id",
        "status",
    ];

    public function page()
    {
        return $this->belongsTo(NestedPosts::class);
    }
}

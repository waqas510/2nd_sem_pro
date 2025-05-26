<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function category()
    {
        return $this->belongsTo(category::class);
    } 
    protected $fillable = [
        'song_name',
        'song_des',
        'song',
        'catid',
    ];
}

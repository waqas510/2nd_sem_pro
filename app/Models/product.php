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
        'pro_name',
        'pro_des',
        'pro_audios',
        'catId',
    ];
}

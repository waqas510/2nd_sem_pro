<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'pro_name',
        'pro_des',
        'pro_image',
        'catId',
    ];
}

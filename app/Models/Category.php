<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class);
    } 
     protected $fillable = [
        'cat_name',
        'cat_des',
        'cat_img',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeImage extends Model
{
    protected $fillable = ['headline', 'name', 'description', 'hero_img'];

    protected $casts = [
        'hero_img' => 'array',
    ];
}

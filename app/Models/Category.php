<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;

class Category extends Model
{
    protected $fillable = [
        'name',
        'image'
    ];


    public function categorySub(): HasMany
    {
        return $this->hasMany(CategorySub::class);
    }

    public function categoryProduct(): HasMany
    {
        return $this->hasMany(CategoryProduct::class);
    }
}

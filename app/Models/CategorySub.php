<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class CategorySub extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'image'
    ];




    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function categoryProduct(): HasMany
    {
        return $this->hasMany(CategoryProduct::class);
    }
}

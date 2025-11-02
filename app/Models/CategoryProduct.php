<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CategoryProduct extends Model
{
    protected $fillable = [
        'category_sub_id',
        'name',
        'image',
        'price',
        'discount',
        'description',
        'description_point',
        'width',
        'height',
        'depth',
    ];

    protected $casts = [
        'image' => 'array',
        'description_point' => 'array',
        'width' => 'decimal:2',
        'height' => 'decimal:2',
        'depth' => 'decimal:2',
        'price' => 'decimal:2',
    ];

    protected $appends = [
        'first_image_url',
    ];

    public function getFirstImageUrlAttribute(): string
    {
        $first = is_array($this->image)
            ? Arr::first($this->image)
            : (is_string($this->image) ? $this->image : null);

        if (!$first) {
            return asset('images/placeholder.png');
        }

        return Str::startsWith($first, ['http://', 'https://'])
            ? $first
            : Storage::url($first);
    }

    public function categorySub(): BelongsTo
    {
        return $this->belongsTo(CategorySub::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}

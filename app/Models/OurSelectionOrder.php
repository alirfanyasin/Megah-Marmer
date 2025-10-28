<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OurSelectionOrder extends Model
{
    protected $guarded = ['id'];

    public function categoryProduct(): BelongsTo
    {
        return $this->belongsTo(CategoryProduct::class);
    }
}

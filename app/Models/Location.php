<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Location extends Model
{
    use Searchable;

    protected $fillable = [
        'name',
        'address',
        'google_map',
        'image',
        'phone'
    ];

    /**
     * Get the indexable data array for the model.
     */
    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'address' => $this->address,
            'phone' => $this->phone,
        ];
    }

    public function searchableAs()
    {
        return 'locations_index';
    }
}

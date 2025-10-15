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

    public function searchableAs(): string
    {
        return 'locations';
    }

    public function toSearchableArray()
    {
        return [
            'id'        => $this->id,
            'name'      => $this->name,
            'address'   => $this->address,
            'phone'     => $this->phone,
            'google_map' => $this->google_map,
        ];
    }
}

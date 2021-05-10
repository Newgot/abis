<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $fillable = [
        'name_publish',
        'description_publish'
    ];

    public function scopeSearch($query, $searchQuery)
    {
        return $query
            ->where('name_publish', 'LIKE', "%$searchQuery%")
            ->orWhere('description_publish', 'LIKE', "%$searchQuery%")
            ->get();
    }
}

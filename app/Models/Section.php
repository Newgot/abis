<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
      'name_section',
      'room_section'
    ];

    public function scopeSearch($query, $searchQuery)
    {
        return $query
            ->where('name_section', 'LIKE', "%$searchQuery%")
            ->orWhere('room_section', 'LIKE', "%$searchQuery%")
            ->get();
    }
}

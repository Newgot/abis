<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book_Publisher extends Model
{
    protected $fillable = [
        'id_book',
        'id_publisher',
        'year_edition'
    ];
}

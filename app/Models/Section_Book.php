<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section_Book extends Model
{
    protected $fillable = [
        'id_book',
        'id_section',
        'd_reg'
    ];
}

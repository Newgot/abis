<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BiblUser_Book extends Model
{
    protected $table = 'bibl_users__books';

    protected $fillable = ['id_book', 'id_user','d_return'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BiblUser extends Model
{
    protected $fillable = ['f_name', 'l_name', 'pool'];

    public function scopeGetBooks($query, $id)
    {
        return $query
            ->join('bibl_users__books', 'bibl_users.id', '=', 'bibl_users__books.id_user')
            ->join('books', 'books.id', '=', 'bibl_users__books.id_book')
            ->where('id_user', $id)
            ->get();
    }

    public function scopeSearch($query, $searchQuery)
    {
        return $query
            ->where('f_name', 'LIKE', "%$searchQuery%")
            ->orWhere('l_name', 'LIKE', "%$searchQuery%")
            ->get();
    }
}

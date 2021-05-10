<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name', 'author', 'status'];

    public function scopeGetPublishers($query, $id)
    {
        return $query
            ->join('book__publishers', 'book__publishers.id_book', '=', 'books.id')
            ->join('publishers', 'publishers.id', '=', 'book__publishers.id_publisher')
            ->where('id_book', $id)
            ->get();
    }

    public function scopeGetSections($query, $id)
    {
        return $query
            ->join('section__books', 'section__books.id_book', '=', 'books.id')
            ->join('sections', 'sections.id', '=', 'section__books.id_book')
            ->where('id_book', $id)
            ->get();
    }

    public function scopeSearch($query, $searchQuery)
    {
        return $query
            ->where('name', 'LIKE', "%$$searchQuery%")
            ->orWhere('author', 'LIKE', "%$$$searchQuery%")
            ->orWhere('status', 'LIKE', "%$$searchQuery%")
            ->get();
    }
}

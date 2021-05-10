<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BiblUser_Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.all', compact('books'));
    }

    public function renderBookForm()
    {
        return view('books.form');
    }

    public function addBook(Request $request)
    {
        Book::create(
            [
                'name' => $request->name,
                'author' => $request->author,
                'status' => $request->status
            ]
        );
        return redirect(route('home'));
    }

    public function renderFormEditBook($id)
    {
        $book = Book::find($id);
        $publishers = Book::getPublishers($id);
        $publisher = null;
        if (count($publishers)) {
            $publisher = $publishers[0];
        }

        $sections = Book::getSections($id);
        $section = null;
        if (count($sections)) {
            $section = $sections[0];
        }
        return view(
            'books.edit',
            [
                'publisher' => $publisher,
                'book' => $book,
                'section' => $section
            ]
        );
    }

    public function editBook(Request $request)
    {
        Book::find($request->id)
            ->update(
                [
                    'name' => $request->name,
                    'author' => $request->author,
                    'status' => $request->status
                ]
            );

        BiblUser_Book::where('id_book', $request->id)
            ->delete();
        return redirect(route('books'));
    }

    public function renderFormDelBook($id)
    {
        $book = Book::find($id);
        return view('books.del', compact('book'));
    }

    public function delBook(Request $request)
    {
        $book = Book::find($request->id);
        if (!is_null($book)) {
            $book->delete();
        }
        return redirect(route('home'));
    }
}

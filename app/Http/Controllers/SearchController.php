<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BiblUser;
use App\Models\Publisher;
use App\Models\Section;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $searchQuery = $request->searchQuery;
        $books = Book::search($searchQuery);
        $users = BiblUser::search($searchQuery);
        $publishers = Publisher::search($searchQuery);
        $sections = Section::search($searchQuery);

        return view(
            'search.result',
            [
                'books' => $books,
                'users' => $users,
                'publishers' => $publishers,
                'sections' => $sections
            ]
        );
    }
}

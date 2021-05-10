<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;
use App\Models\Book_Publisher;

class PublisherController extends Controller
{
    public function index()
    {
        $publishers = Publisher::all();
        return view('publishers.all', compact('publishers'));
    }

    public function addPublisher(Request $request)
    {
        Publisher::create($request->all());
        return redirect(route('pub'));
    }

    public function renderFormBindPublisher($id)
    {
        $publishers = Publisher::all();
        return view(
            'publishers.book-bind',
            [
                'publishers' => $publishers,
                'id' => $id
            ]
        );
    }

    public function bindPublisher(Request $request)
    {
        Book_Publisher::create($request->all());
        $id_book = $request->id_book;
        return redirect(route('books.editForm', ['id' => $id_book]));
    }

    public function renderFormEditPublisher($id)
    {
        $publisher = Publisher::find($id);
        return view('publishers.edit', compact('publisher'));
    }

    public function editPublisher(Request $request)
    {
        Publisher::where('id', $request->id)
            ->update(
                [
                    'name_publish' => $request->name_publish,
                    'description_publish' => $request->description_publish
                ]
            );
        return redirect(route('pub'));
    }

    public function renderFormDelPublisher($id)
    {
        $publisher = Publisher::find($id);
        return view('publishers.del', compact('publisher'));
    }

    public function delPublisher(Request $request)
    {
        $publisher = Publisher::where('id', $request->id);
        if (!is_null($publisher)) {
            $publisher->delete();
        }
        return redirect(route('pub'));
    }
}

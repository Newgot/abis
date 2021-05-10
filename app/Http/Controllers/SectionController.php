<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Section_Book;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::all();
        return view('sections.all', compact('sections'));
    }

    public function addSection(Request $request)
    {
        Section::create($request->all());
        return redirect(route('sections'));
    }

    public function renderFormEditSection($id)
    {
        $section = Section::find($id);
        return view('sections.edit', compact('section'));
    }

    public function editSection(Request $request)
    {
        Section::where('id', $request->id)
            ->update(
                [
                    'name_section' => $request->name_section,
                    'room_section' => $request->room_section
                ]
            );
        return redirect(route('sections'));
    }

    public function renderFormDelSection($id)
    {
        $section = Section::find($id);
        return view('sections.del', compact('section'));
    }

    public function delSection(Request $request)
    {
        $section = Section::where('id', $request->id);
        if (!is_null($section)) {
            $section->delete();
        }
        return redirect(route('sections'));
    }

    public function renderFormBindSection($id)
    {
        $sections = Section::all();
        return view(
            'sections.book-bind',
            [
                'id' => $id,
                'sections' => $sections
            ]
        );
    }

    public function bindSection(Request $request)
    {
        Section_Book::create(
            [
                'id_book' => $request->id_book,
                'id_section' => $request->id_section,
                'd_reg' => date('Y-m-d H:i:s')
            ]
        );
        return redirect(route('books.editForm', ['id' => $request->id_book]));
    }
}

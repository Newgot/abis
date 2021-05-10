<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BiblUser;
use App\Models\BiblUser_Book;
use App\Models\Publisher;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = BiblUser::all();
        return view('users.all', compact('users'));
    }

    public function addUser(Request $request)
    {
        BiblUser::create(
            [
                'f_name' => $request->f_name,
                'l_name' => $request->l_name
            ]
        );
        return redirect('users');
    }

    public function renderFormDelUser($id)
    {
        $user = BiblUser::find($id);
        return view('users.del', compact('user'));
    }

    public function delUser(Request $request)
    {
        $biblUser = BiblUser::find($request->id);
        if (!is_null($biblUser)) {
            $biblUser->delete();
        }
        return redirect(route('users'));
    }

    public function renderUser($id)
    {
        $user = BiblUser::find($id);

        $books = BiblUser::getBooks($id);

        return view(
            'users.user',
            [
                'user' => $user,
                'id' => $id,
                'books' => $books,
                'count' => count($books)
            ]
        );
    }

    public function editUser(Request $request)
    {
        $id = $request->id;
        BiblUser::find($id)
            ->update(
                [
                    'f_name' => $request->f_name,
                    'l_name' => $request->l_name
                ]
            );
        return redirect(route('users.editForm', ['id' => $id]));
    }

    public function renderBooks($id)
    {
        $books = Book::where('status', 'Есть')
            ->get();
        return view(
            'users.book-bind',
            [
                'books' => $books,
                'id' => $id
            ]
        );
    }

    public function bindBook(Request $request)
    {
        $userId = $request->userId;
        $bookId = $request->bookId;
        $d = $request->d_day;
        $m = $request->d_mount;
        $y = $request->d_year;
        $date = "$y-$m-$d";
        Book::find($bookId)
            ->update(
                [
                    'status' => 'На руках'
                ]
            );
        BiblUser_Book::create(
            [
                'id_user' => $userId,
                'id_book' => $bookId,
                'd_return' => $date
            ]
        );
        return redirect(route('users.editForm', ['id' => $userId]));
    }

    public function returnBook(Request $request)
    {
        $userId = $request->userId;
        $bookId = $request->bookId;
        Book::find($bookId)
            ->update(
                [
                    'status' => 'Есть'
                ]
            );
        BiblUser_Book::where('id_user', $userId)
            ->where('id_book', $bookId)
            ->delete();
        return redirect(route('users.editForm', ['id' => $userId]));
    }
}

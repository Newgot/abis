@extends('master')
@section('content')
    <br>
    <form action="{{route('users.editRequest', ['id' => $user->id])}}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$user->id}}">
        <p>
            First Name : <input type="text" name="f_name" value="{{$user->f_name}}">
        </p>
        <p>
            Last Name : <input type="text" name="l_name" value="{{$user->l_name}}">
        </p>
        <button class="btn btn-warning" type="submit">Change</button>
    </form>
    <br>
    <p>Колличество взятых книг : {{ $count }}</p>
    <table class="container table">
        <thead>
        <tr class="row">
            <th class="col-1">ID</th>
            <th class="col-4">Name</th>
            <th class="col-2">Author</th>
            <th class="col-2">Status</th>
            <th class="col-1">Date return</th>
            <th class="col-1"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr class="row">
                <td class="col-1">{{ $book->id }}</td>
                <td class="col-4">{{ $book->name }}</td>
                <td class="col-2">{{ $book->author }}</td>
                <td class="col-2">{{ $book->status }}</td>
                <td class="col-1">{{ $book->d_return }}</td>
                <td class="col-1">
                    <form action="{{route('users.returnBook', ['id' => $user->id])}}" method="POST">
                        @csrf
                        <input type="hidden" name="userId" value="{{$user->id}}">
                        <input type="hidden" name="bookId" value="{{$book->id}}">
                        <button class="btn btn-warning" type="submit">Return</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a class="btn btn-warning"
    href="{{route('users.userBooks', ['id' => $user->id])}}">Записать книгу</a>
@endsection

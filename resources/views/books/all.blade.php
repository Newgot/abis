@extends('master')
@section('content')
    <table class="container table">
        <thead>
        <tr class="row">
            <th class="col-1">ID</th>
            <th class="col-5">Name</th>
            <th class="col-2">Author</th>
            <th class="col-1">Status</th>
            <th class="col-2"></th>
            <th class="col-1"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr class="row">
                <td class="col-1">{{ $book->id }}</td>
                <td class="col-5">{{ $book->name }}</td>
                <td class="col-2">{{ $book->author }}</td>
                <td class="col-1">{{ $book->status }}</td>
                <td class="col-2"><a class="btn btn-warning" href="{{route('books.editForm', ["id" => $book->id])}}">Открыть</a></td>
                <td class="col-1"><a class="btn btn-warning" href="{{route('books.delForm', ["id" => $book->id])}}">Удалить</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

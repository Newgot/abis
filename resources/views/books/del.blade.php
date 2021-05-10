@extends('master')

@section('content')
    <br>
    <p>
        Вы уверены, что хотите удалить <span class="text-danger">{{ $book->name }}</span> ?
    </p>
    <form method="POST" action="{{route('books.delRequest', ['id' => $book->id])}}">
        @csrf
        <input type="hidden" name="id" value="{{ $book->id }}">

        <p>
            <button class="btn btn-warning" type="submit">Yes</button>
        </p>
    </form>
@endsection

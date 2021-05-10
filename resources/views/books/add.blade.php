@extends('master')
@section('content')
    <br>
    <form method="POST" action="{{route('books.addRequest')}}">
        @csrf
        <p>
            Name : <input type="text" name="name" value="{{ old('name') }}">
        </p>
        <p>
            Author : <input type="text" name="author" value="{{ old('author') }}">
        </p>
        <select name="status">
            <option value="Есть">Есть</option>
            <option value="Отсутствует">Отсутствует</option>
        </select>
        <p>
            <button class="btn btn-warning" type="submit">Create</button>
        </p>
    </form>
@endsection

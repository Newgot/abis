@extends('master')
@section('content')
    <br>
    <form method="POST" action="{{route('pub.editRequest', ['id' => $publisher->id])}}">
        @csrf
        <input type="hidden" name="id" value="{{ $publisher->id }}">
        <p>
            Название : <input type="text" name="name_publish" value="{{ $publisher->name_publish }}">
        </p>
        <p>
            Описание : <input type="text" name="description_publish" value="{{ $publisher->description_publish }}">
        </p>
        <p>
            <button class="btn btn-warning" type="submit">Изменить</button>
        </p>
    </form>
@endsection

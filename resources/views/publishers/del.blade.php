@extends('master')

@section('content')
    <br>
    <p>
        Вы уверены, что хотите удалить <span class="text-danger">{{ $publisher->name_publish }}</span> ?
    </p>
    <form method="POST" action="{{route('pub.delRequest', ['id' => $publisher->id])}}">
        @csrf
        <input type="hidden" name="id" value="{{ $publisher->id }}">

        <p>
            <button class="btn btn-warning" type="submit">Да</button>
        </p>
    </form>
@endsection

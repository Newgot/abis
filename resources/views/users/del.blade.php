@extends('master')

@section('content')
    <br>
    <p>
        Вы уверены, что хотите удалить пользователя
        <span class="text-danger">{{ $user->f_name }} {{ $user->l_name }}</span> ?
    </p>
    <form method="POST" action="{{route('users.delRequest', ['id' => $user->id])}}">
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">

        <p>
            <button class="btn btn-warning" type="submit">Yes</button>
        </p>
    </form>
@endsection

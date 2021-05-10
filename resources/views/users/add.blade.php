@extends('master')
@section('content')
    <br>
    <form method="POST" action="{{route('users.addRequest')}}">
        @csrf
        <p>
            First Name : <input type="text" name="f_name" value="{{ old('f_name') }}">
        </p>
        <p>
            Last Name : <input type="text" name="l_name" value="{{ old('l_name') }}">
        </p>
        <p>
            <button class="btn btn-warning" type="submit">Create</button>
        </p>
    </form>
@endsection

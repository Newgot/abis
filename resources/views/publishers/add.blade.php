@extends('master')
@section('content')
    <br>
    <form method="POST" action="{{route('pub.addRequest')}}">
        @csrf
        <p>
            Name : <input type="text" name="name_publish" value="{{ old('name_publish') }}">
        </p>
        <p>
            Description : <input type="text" name="description_publish" value="{{ old('description_publish') }}">
        </p>
        <p>
            <button class="btn btn-warning" type="submit">Create</button>
        </p>
    </form>
@endsection

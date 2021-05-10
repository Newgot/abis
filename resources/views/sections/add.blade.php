@extends('master')
@section('content')
    <br>
    <form method="POST" action="{{route('sections.addForm')}}">
        @csrf
        <p>
            Название : <input type="text" name="name_section" value="{{ old('name_section') }}">
        </p>
        <p>
            Номер аудитории : <input type="text" name="room_section" value="{{ old('room_section') }}">
        </p>
        <p>
            <button class="btn btn-warning" type="submit">Создать</button>
        </p>
    </form>
@endsection

@extends('master')
@section('content')
    <br>
    <form method="POST" action="{{route('sections.editRequest', ['id' => $section->id])}}">
        @csrf
        <input type="hidden" name="id" value="{{ $section->id }}">
        <p>
            Название : <input type="text" name="name_section" value="{{ $section->name_section }}">
        </p>
        <p>
            Описание : <input type="number" name="room_section" value="{{ $section->room_section }}">
        </p>
        <p>
            <button class="btn btn-warning" type="submit">Изменить</button>
        </p>
    </form>
@endsection

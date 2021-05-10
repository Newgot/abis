@extends('master')

@section('content')
    <br>
    <p>
        Вы уверены, что хотите удалить <span class="text-danger">{{ $section->name_section }}</span> ?
    </p>
    <form method="POST" action="{{route('sections.delRequest', ['id' => $section->id])}}">
        @csrf
        <input type="hidden" name="id" value="{{ $section->id }}">

        <p>
            <button class="btn btn-warning" type="submit">Да</button>
        </p>
    </form>
@endsection

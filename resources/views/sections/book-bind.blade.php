@extends('master')
@section('content')
    <table class="container table">
        <thead>
        <tr class="row">
            <th class="col-1">ID</th>
            <th class="col-3">Название</th>
            <th class="col-2"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($sections as $section)
            <tr class="row">
                <td class="col-1">{{ $section->id }}</td>
                <td class="col-3">{{ $section->name_section }}</td>
                <td class="col-2">
                    <form method="POST" action="{{route('sections.bindBook' , ['id' => $id])}}">
                        @csrf
                        <input type="hidden" name="id_section" value="{{ $section->id }}">
                        <input type="hidden" name="id_book" value="{{ $id }}">
                        <button class="btn btn-warning" type="submit">Выбрать</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>



@endsection

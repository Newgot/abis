@extends('master')
@section('content')
    <table class="container table">
        <thead>
        <tr class="row">
            <th class="col-1">ID</th>
            <th class="col-3">Название</th>
            <th class="col-3">Номер аудитории</th>
            <th class="col-2"></th>
            <th class="col-1"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($sections as $section)
            <tr class="row">
                <td class="col-1">{{ $section->id }}</td>
                <td class="col-3">{{ $section->name_section }}</td>
                <td class="col-3">{{ $section->room_section }}</td>
                <td class="col-2">
                    <a class="btn btn-warning" 
                    href="{{route('sections.editForm', ['id' => $section->id])}}">
                        Изменить
                    </a>
                </td>
                <td class="col-1">
                    <a class="btn btn-warning" 
                    href="{{route('sections.delForm', ['id' => $section->id])}}">
                        Удалить
                </a>
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

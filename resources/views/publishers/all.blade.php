@extends('master')
@section('content')
    <table class="container table">
        <thead>
        <tr class="row">
            <th class="col-1">ID</th>
            <th class="col-3">Название</th>
            <th class="col-5">Описание</th>
            <th class="col-2"></th>
            <th class="col-1"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($publishers as $publisher)
            <tr class="row">
                <td class="col-1">{{ $publisher->id }}</td>
                <td class="col-3">{{ $publisher->name_publish }}</td>
                <td class="col-5">{{ $publisher->description_publish }}</td>
                <td class="col-2">
                    <a class="btn btn-warning" 
                    href="{{route('pub.editForm', ['id' => $publisher->id])}}">
                        Изменить
                    </a>
                </td>
                <td class="col-1">
                    <a class="btn btn-warning" 
                    href="{{route('pub.delForm', ['id' => $publisher->id])}}">
                        Удалить
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

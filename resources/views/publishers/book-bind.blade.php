@extends('master')
@section('content')
    <table class="container table">
        <thead>
        <tr class="row">
            <th class="col-1">ID</th>
            <th class="col-3">Название</th>
            <th class="col-5">Описание</th>
            <td class="col-2">Год издания</td>
        </tr>
        </thead>
        <tbody>
        @foreach($publishers as $publisher)
            <tr class="row">
                <td class="col-1">{{ $publisher->id }}</td>
                <td class="col-3">{{ $publisher->name_publish }}</td>
                <td class="col-5">{{ $publisher->description_publish }}</td>
                <td class="col-2">
                    <form method="POST" class="d-flex" action="{{route('pub.bindBook', ['id' => $id])}}">
                        @csrf
                        <input type="hidden" name="id_publisher" value="{{$publisher->id }}">
                        <input type="hidden" name="id_book" value="{{$id}}">
                        <input type="number" name="year_edition" class="d-block">
                        <button class="btn btn-warning d-block" type="submit">Bind</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

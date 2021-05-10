@extends('master')
@section('content')
    <table class="container table">
        <tbody>
        @foreach($books as $book)
            <tr class="row">
                <td class="col-1">{{ $book->id }}</td>
                <td class="col-5">{{ $book->name }}</td>
                <td class="col-2">{{ $book->author }}</td>
                <td class="col-1">{{ $book->status }}</td>
                <td class="col-2">
                    <a class="btn btn-warning" 
                    href="{{route('books.editForm', ['id' => $book->id])}}">
                        Изменить
                    </a>
                </td>
                <td class="col-1">
                    <a class="btn btn-warning" 
                    href="{{route('boks.delForm', ['id' => $book->id])}}">
                        Удалить
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <table class="container table">
        <tbody>
        @foreach($users as $user)
            <tr class="row">
                <td class="col-1">{{ $user->id }}</td>
                <td class="col-3">{{ $user->f_name }}</td>
                <td class="col-3">{{ $user->l_name }}</td>
                <td class="col-1">
                    <a class="btn btn-warning" 
                    href="{{route('users.editForm', ['id' => $user->id])}}">
                        Открыть
                    </a>
                </td>
                <td class="col-1">
                    <a class="btn btn-warning" 
                    href="{{route('users.delForm', ['id' => $user->id])}}">
                        Удалить
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <table class="container table">
        <tbody>
        @foreach($publishers as $publisher)
            <tr class="row">
                <td class="col-1">{{ $publisher->id }}</td>
                <td class="col-3">{{ $publisher->name_publish }}</td>
                <td class="col-5">{{ $publisher->description_publish }}</td>
                <td class="col-2">
                    <a class="btn btn-warning" 
                    href="{{route('pub.editFrom', ['id' => $publisher->id])}}">
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
    <table class="container table">
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

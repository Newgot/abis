@extends('master')
@section('content')
    <table class="container table">
        <thead>
        <tr class="row">
            <th class="col-1">ID</th>
            <th class="col-3">First Name</th>
            <th class="col-3">Last Name</th>
            <th class="col-1"></th>
            <th class="col-auto"></th>
        </tr>
        </thead>
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
                <td class="col-auto">
                    <a class="btn btn-warning" 
                    href="{{route('users.delForm', ['id' => $user->id])}}">
                        Удалить
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

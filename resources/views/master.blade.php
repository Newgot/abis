<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand bg-warning">
    <div class="collapse navbar-collapse container">
        <ul class="navbar-nav mr-auto d-flex">
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{route('home')}}">Библиотека</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{route('books.addForm')}}">Добавить книгу</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Пользователи
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-dark" href="{{route('users')}}">Открыть</a>
                    <a class="dropdown-item text-dark" href="{{route('users.addForm')}}">Добавить</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Издательства
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-dark" href="{{route('pub')}}">Открыть</a>
                    <a class="dropdown-item text-dark" href="{{route('pub.addForm')}}">Добавить</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Разделы
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-dark" href="{{route('sections')}}">Открыть</a>
                    <a class="dropdown-item text-dark" href="{{route('sections.addForm')}}">Добавить</a>
                </div>
            </li>
        </ul>
        <nav class="navbar navbar-light ">
            <form class="form-inline" action="{{route('search')}}" method="POST">
                @csrf
                <input
                        class="form-control mr-sm-2"
                        type="text" placeholder="Поиск"
                        aria-label="Search"
                        name="searchQuery"
                        value="{{ old('searchQuery') }}">
                <button class="btn btn-dark my-2 my-sm-0" type="submit">Поиск</button>
            </form>
        </nav>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>
</body>
</html>

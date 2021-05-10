@extends('master')

@section('content')
    <br>
    <form method="POST" action="{{route('books.editRequest' , ["id" => $book->id])}}">
        @csrf
        <input type="hidden" name="id" value="{{ $book->id }}">
        <p>
            Name : <input type="text" name="name" value="{{ $book->name }}">
        </p>
        <p>
            Author : <input type="text" name="author" value="{{ $book->author }}">
        </p>
        <select name="status">
            <option value="Есть">Есть</option>
            <option value="Отсутствует">Отсутствует</option>
        </select>
        <p>
            <button class="btn btn-warning" type="submit">Изменить</button>
        </p>
    </form>
    @if(!is_null($publisher) )
        <h3>Издательство</h3>
        <div class="row">
            <div class="col-3">
                <p>{{ $publisher->name_publish }}</p>
            </div>
            <div class="col-9">
                <p>{{ $publisher->year_edition }}</p>
            </div>
        </div>
        {{-- @TODO: Доделать роутинг --}}
        <a class="btn btn-warning" 
        href="{{route('pub.publisherBook', ['id' => $book->id])}}">
            Сменить издательство
        </a>
    @else
        <a class="btn btn-warning" 
        href="{{route('pub.publisherBook', ['id' => $book->id])}}">
            Назначить издательство
        </a>
    @endif
    <br>
    @if(!is_null($section) )
        <h3>Раздел</h3>
        <div class="row">
            <div class="col-3">
                <p>{{ $section->name_section }}</p>
            </div>
            <div class="col-9">
                <p>{{ $section->room_section }}</p>
            </div>
        </div>
        <a class="btn btn-warning" 
        href="{{route('sections.sectionBook', ['id' => $book->id])}}">
            Сменить раздел
        </a>
    @else
        <a class="btn btn-warning" 
        href="{{route('sections.sectionBook', ['id' => $book->id])}}">
            Указать раздел
        </a>
    @endif
@endsection

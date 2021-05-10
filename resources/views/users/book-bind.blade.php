@extends('master')
@section('content')
    <table class="container table">
        <thead>
        <tr class="row">
            <th class="col-1">ID</th>
            <th class="col-3">Name</th>
            <th class="col-2">Author</th>
            <th class="col-2">Status</th>
            <th class="col-4">Date return</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr class="row">
                <td class="col-1">{{ $book->id }}</td>
                <td class="col-3">{{ $book->name }}</td>
                <td class="col-2">{{ $book->author }}</td>
                <td class="col-2">{{ $book->status }}</td>
                <td class="col-4">
                    <form method="POST" action="{{route('users.bundBook', ['id' => $id])}}">
                        @csrf
                        <input type="hidden" name="userId" value="{{$id}}">
                        <input type="hidden" name="bookId" value="{{$book->id}}">
                        <select name="d_day">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">20</option>
                            <option value="31">31</option>
                        </select>
                        <select name="d_mount">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        <select name="d_year">
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>
                        <button class="btn btn-warning" type="submit">Bind</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>



@endsection

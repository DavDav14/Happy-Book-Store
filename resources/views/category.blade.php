@extends('layouts.main')

@section('title')
    <h1>{{ $category }}</h1>
@endsection

@section('content')
<table class="table table-hover my-5">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col-6">Author</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($books as $book )
            @if ($book === NULL)
                <tr>
                    <td>No Data...</td>
                </tr>
            @endif
            <tr>
                <td><a href="/details/{{$book->Detail['id']}}">{{ $book['title'] }}</a></td>
                <td>{{ $book->Detail['author'] }}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection

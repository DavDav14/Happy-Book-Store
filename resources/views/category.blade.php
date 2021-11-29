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
        @if ($books->isNotEmpty())
            @foreach ($books as $book )
                <tr>
                    <td><a style="text-decoration: none; color:#020302;" href="/details/{{$book->Detail['id']}}">{{ $book['title'] }}</a></td>
                    <td>{{ $book->Detail['author'] }}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td>No Data...</td>
                <td></td>
            </tr>
        @endif
    </tbody>
  </table>
@endsection

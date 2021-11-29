@extends('layouts.main')

@section('title')
    <h1>Book Detail</h1>
@endsection

@section('content')
    <div class="mt-3">
        <p>Title : {{ $detail->Book['title'] }}</p>
        <p>Author : {{ $detail['author'] }}</p>
        <p>Publisher : {{ $detail['publisher'] }}</p>
        <p>Year : {{ $detail['year'] }}</p>
        <p>Description :</p>
        <p>{{ $detail['description'] }}</p>
    </div>
@endsection

@extends('layout.default')

@section('content')
    <h1>Title: {{ $movie->title }}</h1>
    <h1>Genre: {{ $movie->genre }}</h1>
    <h1>Director: {{ $movie->director }}</h1>
    <h1>Year: {{ $movie->year_of_release }}</h1>
    <h2>Storyline: {{ $movie->storyline }}</h2>
@endsection
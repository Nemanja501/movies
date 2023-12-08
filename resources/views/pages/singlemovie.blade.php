@extends('layout.default')

@section('content')
    <h1>Title: {{ $movie->title }}</h1>
    <h1>Genre: {{ $movie->genre }}</h1>
    <h1>Director: {{ $movie->director }}</h1>
    <h1>Year: {{ $movie->year_of_release }}</h1>
    <h2>Storyline: {{ $movie->storyline }}</h2>

    <ul class="list-group list-group-flush">
        @foreach ($movie->comments as $comment)
            <li class="list-group-item">{{ $comment->content }} {{ $comment->created_at->diffForHumans() }}</li>
        @endforeach
      </ul>
@endsection
@extends('layout.default')

@section('content')
    <h1>Title: {{ $movie->title }}</h1>
    <a style="text-decoration:none" href="../genres/{{ $movie->genre->id }}"><h1>Genre: {{ $movie->genre->name }}</h1></a>
    <h1>Director: {{ $movie->director }}</h1>
    <h1>Year: {{ $movie->year_of_release }}</h1>
    <h2>Storyline: {{ $movie->storyline }}</h2>

    @include('components.addcomment')
    <br>
    @include('components.errors')
    @include('components.status')
    <ul class="list-group list-group-flush">
        @foreach ($movie->comments as $comment)
            <li class="list-group-item">{{ $comment->content }} | {{ $comment->created_at->diffForHumans() }}</li>
        @endforeach
      </ul>
@endsection
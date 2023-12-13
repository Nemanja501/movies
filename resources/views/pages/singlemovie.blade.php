@extends('layout.default')

@section('content')
    <h1>Title: {{ $movie->title }}</h1>
    <h2>Genres: 
        <br>
        @foreach ($movie->genres as $genre)
        <a style="text-decoration:none" href="../genres/{{ $genre->id }}">{{ $genre->name }}</a>
        <br>
        @endforeach
    </h2>
    <h2>Director: {{ $movie->director }}</h2>
    <h2>Actors: 
        <br>
        @foreach ($movie->actors as $actor)
            {{ $actor->first_name }} {{ $actor->last_name }}
            <br>
        @endforeach
    </h2>
    <h2>Year: {{ $movie->year_of_release }}</h2>
    <h4>Storyline: {{ $movie->storyline }}</h4>

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
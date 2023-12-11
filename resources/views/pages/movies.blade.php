@extends('layout.default')

@section('content')
<ol class="list-group list-group-numbered">
    @foreach ($movies as $movie)
    <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <a style="text-decoration:none" href="movies/{{ $movie->id }}"><div class="fw-bold">{{ $movie->title }}</div></a>
          {{ $movie->storyline }}
        </div>
      </li>
    @endforeach
</ol>
@include('components.sidebar')
@endsection
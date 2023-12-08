@extends('layout.default')

@section('content')
<ol class="list-group list-group-numbered">
    @foreach ($movies as $movie)
    <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold">{{ $movie->title }}</div>
          {{ $movie->storyline }}
        </div>
      </li>
    @endforeach
</ol>
@endsection
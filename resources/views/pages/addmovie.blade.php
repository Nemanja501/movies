@extends('layout.default')

@section('content')
<form method="POST" action="{{ url('create') }}">
@csrf
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="title" name="title">
    <label for="floatingInput">Title</label>
  </div>
  <label>Select genres: </label>
  <select name="genres[]" class="form-select" aria-label="Default select example" multiple>
    @foreach ($allGenres as $genre)
      <option value="{{ $genre->id }}">{{ $genre->name }}</option>
    @endforeach
  </select>
  <br>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="director" name="director">
    <label for="floatingInput">Director</label>
  </div>
  <label>Add actors:</label>
  <select name="actors[]" class="form-select" aria-label="Default select example" multiple>
    @foreach ($allActors as $actor)
      <option value="{{ $actor->id }}">{{ $actor->first_name }} {{ $actor->last_name }}</option>
    @endforeach
  </select>
  <br>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="year" name="year_of_release">
    <label for="floatingInput">Year</label>
  </div>
  <div class="form-floating">
    <textarea class="form-control" id="floatingTextarea" placeholder="storyline" name="storyline"></textarea>
    <label for="floatingTextarea">Storyline</label>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
  @include('components.errors')
  @include('components.status')
@endsection
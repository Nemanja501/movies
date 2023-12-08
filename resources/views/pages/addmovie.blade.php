@extends('layout.default')

@section('content')
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="title">
    <label for="floatingInput">Title</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="genre">
    <label for="floatingInput">Genre</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="director">
    <label for="floatingInput">Director</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="year">
    <label for="floatingInput">Year</label>
  </div>
  <div class="form-floating">
    <textarea class="form-control" id="floatingTextarea" placeholder="storyline"></textarea>
    <label for="floatingTextarea">Storyline</label>
  </div>
  <br>
  <button type="button" class="btn btn-primary">Submit</button>
@endsection
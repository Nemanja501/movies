<form method="POST" action="{{ url('/addcomment') }}">
    @csrf
    <div class="form-floating">
        <textarea class="form-control" id="floatingTextarea" placeholder="comment" name="content"></textarea>
        <label for="floatingTextarea">Add comment</label>
      </div>
      <input type="hidden" name="movie_id" value="{{ $movie->id }}">
      <br>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
<b>
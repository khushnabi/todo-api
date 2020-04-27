@extends('layouts.app')

@section('content')

<div class="container">
 <h1>Publish your post</h1>
 <hr />
 <form method="POST" action="/posts">
    {{csrf_field()}}

    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" aria-describedby="title" placeholder="enter your title" required>
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea class="form-control" id="body" name="body" placeholder="body" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">publish</button>
  </form>
</div>
@endsection
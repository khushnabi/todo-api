@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h1>{{$post->title}}</h1>
    

      <p style="font-size: 16px; color: #a1a1a1;">
        {{ $post->user->name }} on 
        {{ $post->created_at->toFormattedDateString() }}
      </p>
  
      <div  style="font-size:17px">
        {{$post->body}}
      </div>
      
  
      <hr />
      <h3>comments: </h3>
  
      <div class="comments">
        <ul class="list-group">
          @foreach($post->comments as $comment)
              <li class="list-group-item">
              <b>{{$comment->created_at->diffForHumans() }}:&nbsp</b>
                  {{$comment->body}}
              </li>
          @endforeach
        </ul>
      </div>
      <hr />
      <div class="card">
          <div class="card-body">
          <form method="POST" action="/posts/{{$post->id}}/comments">
            {{csrf_field()}}
              
                  <div class="form-group">
                    <textarea class="form-control" id="body" name="body" placeholder="Your comments here." required></textarea>
                  </div>
              
                  <button type="submit"  class="btn btn-primary">add Comment</button>
                </form>
          </div>
      </div>
    
    </div>

    <div class="col-md-2"></div>

    <div class="col-md-2">
      @include('posts.sidebar')
  </div>
  </div>

</div>
@endsection
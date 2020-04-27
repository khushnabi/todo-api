@extends('layouts.app')

@section('content')
<div class="container">
    <br />
    <h1>Sample blog post</h1>
    <br /><hr /><br />
    
    <div class="row">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            
            @foreach($posts as $post)
                @include('posts.post')
            @endforeach
        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-2">
            @include('posts.sidebar')
        </div>
    </div>
</div>
@endsection

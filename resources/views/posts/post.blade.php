
<div class="blog-post">
    <h1 class="blog-post-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h1>
    <p class="blog-post-meta" style="font-size: 16px; color: #a1a1a1;" >
        {{ $post->user->name }} 
        {{ $post->created_at->toFormattedDateString()}}
    </p>
    <div style="font-size:17px">
        {{$post->body}}
    </div>
    <br /><br /><br /><br />
    <br />
</div>

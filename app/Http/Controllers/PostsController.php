<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::latest();

        if ($month = request('month')) {
            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }
        if ($year = request('year')) {
            $posts->whereYear('created_at', $year);
        }

        $posts = $posts->get();


        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        // $post = new Post;

        // $post->title = request('title');
        // $post->body = request('body');

        // $post->save();
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);


        return redirect('/home');
    }
}

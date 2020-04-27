<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::latest()->get();
        $archives = Post::selectRow('year(created_at) year, monthname(created_at) month, count(*) published')->groupBy('year', 'month')->get()->toArray();
        return $archives;

        return view('home', compact('posts'));
    }
}

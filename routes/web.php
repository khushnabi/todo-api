<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts/{post}/comments', 'CommentsController@store');

// Route::get('/', 'TaskController@welcom');

// Route::get('/tasks', 'TaskController@index');

// Route::get('tasks/{task}', 'TaskController@show');


Auth::routes();

Route::get('/home', 'PostsController@index')->name('home');

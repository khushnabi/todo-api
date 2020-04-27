<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Post;
use App\Project;


Route::get("/", "Api\HomeController@index");
Route::resource("projects", "Api\ProjectController");
Route::resource("projects.tasks", "Api\TaskController");
// Route::get("/projects", "Api\ProjectController@index");
// Route::post("/projects", "Api\ProjectController@store");
// Route::get("/projects/{project}", "Api\ProjectController@show");

// Resources
// GET /projects - index
// GET /projects/create - index
// POST /projects - store
// GET /projects/{project} - show
// PUT /projects/{project} - update
// DELETE /projects/{project} - destroy
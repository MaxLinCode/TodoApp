<?php

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

// controllers recieve requests, get data, then pass to the view (MVC life)
Route::get('/', 'PostsController@index');
// Use 'php artisan make:model Post -mc' (the model will get created with a controller and migration)
// controller (PostsController) -> Eloquent model (Post) -> migration (create_posts_table)

// index is the method that is called
Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');
<?php
use App\Task;

Route::get('/tasks', 'TasksController@index');
Route::get('tasks/{id}', 'TasksController@show');
Route::get('/tasks/create', 'TasksController@create');



// Tasks
// GET /tasks
// GET /tasks/create
// POST /tasks
// GET /tasks/{id}
// PATCH /tasks/{id}
// DELETE /tasks/{id}

<?php

namespace App\Http\Controllers;
// If I want to use App\Task without the App prefix, 'import' the class
use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index() {
    	//$tasks = DB::table('tasks')->get();
    	$tasks = Task::all();
    	return view('tasks/index', compact('tasks'));
    }

    // Automatic route model binding
    // "$task" must have the same name as an already existing task
    // Laravel identifies as id number
    public function show(Task $task) {
	    //$task = DB::table('tasks')->find($id);
	    //$task = Task::find($id);
	    return view('tasks/show', compact('task'));
    }
}

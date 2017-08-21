<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
	//Eloquent query
	$tasks = Task::all();
    return view('tasks.index', compact('tasks'));
    
}

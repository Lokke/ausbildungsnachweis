<?php

use App\Task;

Route::get('/tasks', function () {
	//Eloquent query
	$tasks = Task::all();
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {
	
    $task = Task::find($id);
	
    return view('tasks.show', compact('task'));
});

Route::get('/enter', function () {
    return view('enter');
});



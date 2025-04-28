<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{

    // Displaying all the tasks
    public function index() {
        return view ('tasks.index');
    }

    // Create Task function 
    public function create() {
        return view ('tasks.create');
    }

    // We store the data in database
    public function store() {
        return request()->all();
    }





// I handle the tasks submission data
// CREATE Task
// DISPLAY LIST of tasks
// MARK a task as completed
// DIVIDE the tasks into completed and uncompleted sections
// DELETE a task permanentlu

}
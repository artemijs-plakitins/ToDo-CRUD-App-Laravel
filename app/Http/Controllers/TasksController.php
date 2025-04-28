<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{

    // Displaying all the tasks
    public function index() {

        $tasks = Task::orderBy('id', 'DESC')->get();
        
        
        return view ('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    // Create Task function 
    public function create() {
        return view ('tasks.create');
    }

    // I store the data in database
    public function store() {
        $task = Task::create([
            'description'=> request('description')
        ]);

        // I am returning to a Home page when a task is created
        // Retrieve all of the tasks when user visits the Homepage
        // Display all of the tasks that user created

        return redirect('/');
    }





// I handle the tasks submission data
// CREATE Task
// DISPLAY LIST of tasks
// MARK a task as completed
// DIVIDE the tasks into completed and uncompleted sections
// DELETE a task permanentlu

}
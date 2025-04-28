<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{

    // Displaying all the tasks
    public function index() {

        $tasks = Task::orderBy('completed_at', 'DESC')
        ->orderBy('id', 'DESC')
        ->get();
        
        
        return view ('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    // Create Task function 
    public function create() {
        return view ('tasks.create');
    }

    public function store() {

        Task::create([
            'description'=> request('description')
        ]);

        return redirect('/');
    }

    public function update($id) {
        $task = Task::where('id', $id) -> first();

        $task -> completed_at = now();
        $task -> save();
        return redirect('/');
    }





// I handle the tasks submission data
// CREATE Task
// DISPLAY LIST of tasks
// MARK a task as completed
// DIVIDE the tasks into completed and uncompleted sections
// DELETE a task permanentlu

}
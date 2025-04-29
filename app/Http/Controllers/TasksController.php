<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{

    // Displaying all the tasks
    public function index() {

        $tasks = Task::orderBy('completed_at', 'ASC')
        ->orderBy('id', 'DESC')
        ->get();
        
        
        return view ('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    public function create() {
        return view ('tasks.create');
    }

    public function store() {

        Task::create([
            'description'=> request('description')
        ]);

        return redirect('/'); // redirection to a homepage
    }

    public function update($id) {
        $task = Task::where('id', $id) -> first();

        $task -> completed_at = now();
        $task -> save();
        return redirect('/'); // redirection to a homepage
    }

    public function delete($id) {
        $task = Task::where('id',$id) -> first();

        $task -> delete();
        return redirect('/'); // redirection to a homepage
    }
}
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

// Home
Route::get('/', [TasksController::class, 'index']);

// All tasks
Route::get('/tasks', [TasksController::class, 'index']);

// Create
Route::get('/tasks/create', [TasksController::class, 'create']);

// Store
Route::post('/tasks', [TasksController::class, 'store']);
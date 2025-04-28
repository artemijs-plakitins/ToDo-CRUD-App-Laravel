@extends('layouts.app')

@section('content')
    <h1>Task List</h1>


    @foreach ($tasks as $task)

    <div class="card @if($task->isCompleted()) border-success @endif" style="margin-bottom: 20px;">
        <div class="card-body">
            <p>{{ $task -> description }}</p>

            @if($task->isCompleted())
                <span class="badge text-bg-success mb-3">Completed</span>
            @endif

            <form action="/tasks/{{ $task->id }}" method="POST">
            @method('PATCH')
            @csrf
            @if(!$task->isCompleted())
            <button class="btn btn-danger" type="submit">Complete</button>
            </form>
            @endif
        </div>
    </div>

    @endforeach

    <a href="/tasks/create" class="btn btn-primary btn-lg w-100">New Task</a>

@endsection
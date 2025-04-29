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

            @if(!$task->isCompleted())
                <form action="/tasks/{{ $task->id }}" method="POST">
                    @method('PATCH')
                    @csrf
                    <button class="btn btn-light" type="submit">Complete</button>
                </form>
            @else
                <form action="/tasks/{{ $task->id }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>

            @endif
        </div>
    </div>

    @endforeach

    <a href="/tasks/create" class="btn btn-primary btn-lg w-100">New Task</a>

@endsection
@extends('layouts.app')

@section('content')
    <h1>New task</h1>
    <form method="POST" action="/tasks">
        <div class="form-group mb-3">
            @csrf
            <label for="description">Task description</label>
            <input type="text" class="form-control" name="description" />
        </div>
        <div class = "form-group mb-3">
            <button type = "submit" class = "btn btn-primary">Create Task</button>
        </div>
    </form>
@endsection
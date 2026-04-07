@extends('layouts.app')

@section('content')

<h2 class="mb-4">Edit Task</h2>

<form action="/tasks/{{ $task->id }}" method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" value="{{ $task->title }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control">{{ $task->description }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Status</label>

        <select name="status" class="form-control">

            <option value="Open" {{ $task->status == 'Open' ? 'selected' : '' }}>Open</option>

            <option value="In Progress" {{ $task->status == 'In Progress' ? 'selected' : '' }}>In Progress</option>

            <option value="Done" {{ $task->status == 'Done' ? 'selected' : '' }}>Done</option>

        </select>

    </div>

    <div class="mb-3">
        <label class="form-label">Priority</label>

        <select name="priority" class="form-control">

            <option value="Low" {{ $task->priority == 'Low' ? 'selected' : '' }}>Low</option>

            <option value="Medium" {{ $task->priority == 'Medium' ? 'selected' : '' }}>Medium</option>

            <option value="High" {{ $task->priority == 'High' ? 'selected' : '' }}>High</option>

        </select>

    </div>

    <button type="submit" class="btn btn-success">Update Task</button>

    <a href="/tasks" class="btn btn-secondary">Back</a>

</form>

@endsection
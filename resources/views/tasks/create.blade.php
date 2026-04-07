@extends('layouts.app')

@section('content')

<h2 class="mb-4">Create New Task</h2>

<form action="/tasks" method="POST">

    @csrf

    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Status</label>

        <select name="status" class="form-control">

            <option value="Open">Open</option>
            <option value="In Progress">In Progress</option>
            <option value="Done">Done</option>

        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Priority</label>

        <select name="priority" class="form-control">

            <option value="Low">Low</option>
            <option value="Medium">Medium</option>
            <option value="High">High</option>

        </select>
    </div>

    <button type="submit" class="btn btn-success">Save Task</button>

    <a href="/tasks" class="btn btn-secondary">Back</a>

</form>

@endsection
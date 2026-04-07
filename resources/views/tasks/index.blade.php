@extends('layouts.app')

@section('content')

<h1 class="mb-4">DevTrack - Task Manager</h1>

<a href="/tasks/create" class="btn btn-primary mb-3">Create Task</a>

<form method="GET" action="/tasks" class="mb-3">
    <div class="input-group">

        <input
            type="text"
            name="search"
            class="form-control"
            placeholder="Search tasks..."
            value="{{ $search ?? '' }}">

        <button class="btn btn-primary">
            Search
        </button>

    </div>
</form>

<table class="table table-bordered">

    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Priority</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($tasks as $task)

        <tr>
            <td>{{ $task->title }}</td>
            <td>{{ $task->description }}</td>
            <td>

                @if($task->status == 'Open')
                <span class="badge bg-danger">Open</span>
                @endif

                @if($task->status == 'In Progress')
                <span class="badge bg-warning text-dark">In Progress</span>
                @endif

                @if($task->status == 'Done')
                <span class="badge bg-success">Done</span>
                @endif

            </td>
            <td>

                @if($task->priority == 'Low')
                <span class="badge bg-secondary">Low</span>
                @endif

                @if($task->priority == 'Medium')
                <span class="badge bg-info text-dark">Medium</span>
                @endif

                @if($task->priority == 'High')
                <span class="badge bg-danger">High</span>
                @endif

            </td>

            <td>

                <a href="/tasks/{{ $task->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

                <form action="/tasks/{{ $task->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

@endsection
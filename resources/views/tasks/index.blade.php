@extends('layouts.app')

@section('content')

<h1 class="mb-4">DevTrack - Task Manager</h1>

<a href="/tasks/create" class="btn btn-primary mb-3">Create Task</a>

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
            <td>{{ $task->status }}</td>
            <td>{{ $task->priority }}</td>

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
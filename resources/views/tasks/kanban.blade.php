@extends('layouts.app')

@section('content')

<h1 class="mb-4">Kanban Board</h1>

<div class="row">

    <div class="col-md-4">
        <h4>Open</h4>

        @foreach($openTasks as $task)
        <div class="card mb-2">
            <div class="card-body">

                <strong>{{ $task->title }}</strong>

                <p>{{ $task->description }}</p>

                <span class="badge bg-danger">Open</span>

            </div>
        </div>
        @endforeach

    </div>


    <div class="col-md-4">
        <h4>In Progress</h4>

        @foreach($progressTasks as $task)
        <div class="card mb-2">
            <div class="card-body">

                <strong>{{ $task->title }}</strong>

                <p>{{ $task->description }}</p>

                <span class="badge bg-warning">In Progress</span>

            </div>
        </div>
        @endforeach

    </div>


    <div class="col-md-4">
        <h4>Done</h4>

        @foreach($doneTasks as $task)
        <div class="card mb-2">
            <div class="card-body">

                <strong>{{ $task->title }}</strong>

                <p>{{ $task->description }}</p>

                <span class="badge bg-success">Done</span>

            </div>
        </div>
        @endforeach

    </div>


</div>

@endsection
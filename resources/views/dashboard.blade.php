@extends('layouts.app')

@section('content')

<h1 class="mb-4">DevTrack Project Dashboard</h1>

<div class="row">

    <div class="col-md-3">
        <div class="card text-white bg-primary mb-3">
            <div class="card-body">
                <h5>Total Tasks</h5>
                <h2>{{ $totalTasks }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card text-white bg-danger mb-3">
            <div class="card-body">
                <h5>Open</h5>
                <h2>{{ $openTasks }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card text-dark bg-warning mb-3">
            <div class="card-body">
                <h5>In Progress</h5>
                <h2>{{ $inProgressTasks }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card text-white bg-success mb-3">
            <div class="card-body">
                <h5>Done</h5>
                <h2>{{ $doneTasks }}</h2>
            </div>
        </div>
    </div>

</div>

@endsection
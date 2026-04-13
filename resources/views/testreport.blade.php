@extends('layouts/app')

@section('content')

<h1 class="mb-4">Test Report</h1>

<table class="table table-bordered">

    <tr>
        <th>Project</th>
        <td>DevTrack Task Manager</td>
    </tr>

    <tr>
        <th>Tester</th>
        <td>Emad</td>
    </tr>

    <tr>
        <th>Date</th>
        <td>13 April 2026</td>
    </tr>

    <tr>
        <th>Environment</th>
        <td>Laravel, MySQL, XAMPP, Chrome</td>
    </tr>

</table>


<h3 class="mt-5">Test Cases</h3>

<table class="table table-striped">

    <thead>
        <tr>
            <th>#</th>
            <th>Scenario</th>
            <th>Expected Result</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>

        <tr>
            <td>1</td>
            <td>Create a new task</td>
            <td>Task is saved and appears in list</td>
            <td>Pass</td>
        </tr>

        <tr>
            <td>2</td>
            <td>Edit existing task</td>
            <td>Task updates correctly</td>
            <td>Pass</td>
        </tr>

        <tr>
            <td>3</td>
            <td>Delete task</td>
            <td>Task disappears from list</td>
            <td>Pass</td>
        </tr>

        <tr>
            <td>4</td>
            <td>Search for task</td>
            <td>Correct tasks appear in results</td>
            <td>Pass</td>
        </tr>

    </tbody>

</table>

@endsection
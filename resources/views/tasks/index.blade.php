<h1>DevTrack Tasks</h1>

<a href="/tasks/create">Create New Task</a>

<ul>
    @foreach($tasks as $task)
    <li>
        <strong>{{ $task->title }}</strong>
        - {{ $task->status }}

        <a href="/tasks/{{ $task->id }}/edit">Edit</a>
    </li>
    @endforeach
</ul>
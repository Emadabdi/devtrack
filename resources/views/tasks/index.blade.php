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

<h2>All Tasks</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Status</th>
        <th>Priority</th>
        <th>Action</th>
    </tr>

    @foreach($tasks as $task)
    <tr>
        <td>{{ $task->title }}</td>
        <td>{{ $task->description }}</td>
        <td>{{ $task->status }}</td>
        <td>{{ $task->priority }}</td>

        <td>
            <form action="/tasks/{{ $task->id }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit">Delete</button>
            </form>
        </td>

    </tr>
    @endforeach

</table>
<h1>Edit Task</h1>

<form method="POST" action="/tasks/{{ $task->id }}">
    @csrf
    @method('PUT')

    <label>Title</label><br>
    <input type="text" name="title" value="{{ $task->title }}"><br><br>

    <label>Description</label><br>
    <textarea name="description">{{ $task->description }}</textarea><br><br>

    <select name="status" class="form-control">

        <option value="Open" {{ $task->status == 'Open' ? 'selected' : '' }}>Open</option>
        <option value="In Progress" {{ $task->status == 'In Progress' ? 'selected' : '' }}>In Progress</option>
        <option value="Done" {{ $task->status == 'Done' ? 'selected' : '' }}>Done</option>

    </select><br><br>

    <select name="priority" class="form-control">

        <option value="Low" {{ $task->priority == 'Low' ? 'selected' : '' }}>Low</option>
        <option value="Medium" {{ $task->priority == 'Medium' ? 'selected' : '' }}>Medium</option>
        <option value="High" {{ $task->priority == 'High' ? 'selected' : '' }}>High</option>

    </select><br><br>

    <button type="submit">Update Task</button>
</form>
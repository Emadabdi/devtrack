<h1>Edit Task</h1>

<form method="POST" action="/tasks/{{ $task->id }}">
    @csrf
    @method('PUT')

    <label>Title</label><br>
    <input type="text" name="title" value="{{ $task->title }}"><br><br>

    <label>Description</label><br>
    <textarea name="description">{{ $task->description }}</textarea><br><br>

    <label>Status</label><br>
    <input type="text" name="status" value="{{ $task->status }}"><br><br>

    <label>Priority</label><br>
    <input type="text" name="priority" value="{{ $task->priority }}"><br><br>

    <button type="submit">Update Task</button>
</form>
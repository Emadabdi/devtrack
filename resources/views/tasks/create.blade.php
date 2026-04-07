<h1>Create Task</h1>

<form method="POST" action="/tasks">
    @csrf

    <label>Title</label><br>
    <input type="text" name="title"><br><br>

    <label>Description</label><br>
    <textarea name="description"></textarea><br><br>

    <label>Status</label><br>

    <select name="status" class="form-control">

        <option value="Open">Open</option>
        <option value="In Progress">In Progress</option>
        <option value="Done">Done</option>

    </select><br><br>

    <label>Priority</label><br>

    <select name="priority" class="form-control">

        <option value="Low">Low</option>
        <option value="Medium">Medium</option>
        <option value="High">High</option>

    </select><br><br>

    <button type="submit">Save Task</button>

</form>

<br>
<a href="/tasks">Back</a>
<h1>Create Task</h1>

<form method="POST" action="/tasks">
    @csrf

    <label>Title</label><br>
    <input type="text" name="title"><br><br>

    <label>Description</label><br>
    <textarea name="description"></textarea><br><br>

    <label>Status</label><br>
    <select name="status">
        <option value="open">Open</option>
        <option value="in progress">In Progress</option>
        <option value="done">Done</option>
    </select><br><br>

    <label>Priority</label><br>
    <select name="priority">
        <option value="low">Low</option>
        <option value="normal">Normal</option>
        <option value="high">High</option>
    </select><br><br>

    <button type="submit">Save Task</button>

</form>

<br>
<a href="/tasks">Back</a>
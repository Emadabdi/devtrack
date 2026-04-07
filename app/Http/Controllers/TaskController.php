<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $tasks = \App\Models\Task::when($search, function ($query, $search) {
            return $query->where('title', 'like', "%$search%")
                ->orWhere('description', 'like', "%$search%");
        })->get();

        return view('tasks.index', compact('tasks', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        \App\Models\Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'priority' => $request->priority
        ]);

        return redirect('/tasks');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $task = \App\Models\Task::find($id);

        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $task = \App\Models\Task::find($id);

        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'priority' => $request->priority
        ]);

        return redirect('/tasks');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        \App\Models\Task::find($id)->delete();

        return redirect('/tasks');
    }

    public function kanban()
    {
        $openTasks = \App\Models\Task::where('status', 'open')->get();
        $progressTasks = \App\Models\Task::where('status', 'in progress')->get();
        $doneTasks = \App\Models\Task::where('status', 'done')->get();

        return view('tasks.kanban', compact('openTasks', 'progressTasks', 'doneTasks'));
    }
}

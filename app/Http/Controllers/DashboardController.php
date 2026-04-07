<?php

namespace App\Http\Controllers;

use App\Models\Task;

class DashboardController extends Controller
{
    public function index()
    {
        $totalTasks = Task::count();

        $openTasks = Task::where('status', 'Open')->count();

        $inProgressTasks = Task::where('status', 'In Progress')->count();

        $doneTasks = Task::where('status', 'Done')->count();

        return view('dashboard', compact(
            'totalTasks',
            'openTasks',
            'inProgressTasks',
            'doneTasks'
        ));
    }
}

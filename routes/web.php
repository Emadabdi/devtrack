<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return redirect('/tasks');
});

Route::get('/kanban', [App\Http\Controllers\TaskController::class, 'kanban']);
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
Route::resource('tasks', TaskController::class);
Route::get('/testreport', function () {
    return view('testreport');
});
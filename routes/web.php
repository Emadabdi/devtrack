<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return redirect('/tasks');
});

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
Route::resource('tasks', TaskController::class);
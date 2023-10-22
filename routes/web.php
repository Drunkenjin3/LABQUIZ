<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::resource('tasks', TaskController::class);

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('tasks', 'TaskController');
});
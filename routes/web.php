<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/schedules', [App\Http\Controllers\ScheduleController::class, 'index'])->name('schedules.index');

Route::get('/schedules/create', [App\Http\Controllers\ScheduleController::class, 'showCreateForm'])->name('schedules.create');
Route::post('/schedules/create', [App\Http\Controllers\ScheduleController::class, 'create']);

Route::get('/schedules/{scheduleId}/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('tasks.index');

Route::get('/schedules/{scheduleId}/tasks/edit', [App\Http\Controllers\TaskController::class, 'showEditForm'])->name('tasks.create');
Route::post('/schedules/{scheduleId}/tasks/edit', [App\Http\Controllers\TaskController::class, 'edit']);
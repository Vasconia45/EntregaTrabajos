<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskList;

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
    return view('taskList');
})->name('taskList');

Route::get('/taskList', [TaskList::class, 'loadTasks'])->name('listTask');

Route::get('/addTask', [TaskList::class, 'loadAddTasks'])->name('addTaskView');

Route::post('/addTask/added', [TaskList::class, 'addTask'])->name('addList');

Route::get('/trashTask', [TaskList::class, 'loadDelete'])->name('trashTask');

Route::post('/trashTask/{$id}', [TaskList::class, 'deleteTask'])->name('deleteTask');

Route::post('/back', [TaskList::class, 'back'])->name('back');

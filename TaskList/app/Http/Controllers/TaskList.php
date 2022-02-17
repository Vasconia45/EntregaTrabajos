<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskList extends Controller
{

    public function loadTasks(){
        $tasks = Task::all();
        return view('listTask', compact('tasks'));
    }

    public function loadAddTasks(){
        return view('addTask');
    }

    public function addTask(Request $request){
        $task = Task::create([
            'nombre' => $request->task
        ]);
        return redirect()->route('addTaskView')->with('success', "Task added correctly.");
    }

    public function loadDelete(){
        $tasks = Task::all();
        return view('deleteTask', compact('tasks'));
    }

    public function deleteTask($id){
        $task = Task::find($id);
        if($task == true){
            $task->delete();
            return redirect()->route('trashTask')->with('success', 'Task has been deleted succesfully.');
        }
        else{
            return redirect()->route('trashTask')->with('error', 'Task has not been deleted.');
        } 
    }

    public function back(){
        return redirect()->back();
    }
}

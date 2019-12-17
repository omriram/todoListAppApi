<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TaskController extends Controller
{

    public function allTasks() {
        return response()->json(Task::get(), 200);
    }

    public function editTask(Request $request) {
        $taskToEdit = Task::findOrFail($request->taskId);
        $taskToEdit->title = $request->taskName;
        $taskToEdit->description = $request->taskDescription;
        $taskToEdit->is_done = 0;
        $taskToEdit->save();
        return response()->json(Task::get(), 200);
    }
    public function createTask(Request $request) {
        $task = new Task();
        $task->title = $request->taskName;
        $task->description = $request->taskDescription;
        $task->is_done = 0;
        $task->save();
        return response()->json(Task::get(), 201);
    }
    public function deleteTask(Request $request) {
        $taskToDelete = Task::findOrFail($request->taskId);
        Task::destroy($taskToDelete->id);
        return response()->json(Task::get(), 200);
    }
    public function changeTaskStatus(Request $request) {

        $taskToEdit = Task::findOrFail($request->taskId);
        $taskToEdit->is_done = $taskToEdit->is_done ? 0 : 1;
        $taskToEdit->save();
        return response()->json(Task::get(), 200);

    }

}

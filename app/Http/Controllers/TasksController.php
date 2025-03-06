<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return response()->json([
            'tasks' => $tasks
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|in:pending,in-progress,completed',
        ]);

        $task = Task::create([
            'title' => $request->title,
            'status' => $request->status,
            'user_id' => auth()->user()->id
        ]);
        return response()->json([
            'message' => 'Task created successfully',
            'task' => $task
        ], 201);
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|in:pending,in-progress,completed',
        ]);

        $task->update($request->all());
        return response()->json([
            'message' => 'Task updated successfully',
            'task' => $task
        ], 200);
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json([
            'message' => 'Task deleted successfully'
        ], 200);
    }
}

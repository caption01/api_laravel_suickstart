<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function all()
    {
        $tasks = Task::all();

        return response()->json($tasks);
    }

    public function store(Request $request)
    {
        // save log into laravel log file
        \Log::info(print_r($request->all(),true));


        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $task = Task::create($request->all());

        return response()->json([
            'message' => 'Great success! New task created',
            'task' => $task
        ]);
    }

    public function show(Task $task)
    {
        return $task;
    }

    public function update(Request $request, Task $task)
    {
        $this->validate($request, [
           'title'       => 'required|sometimes',
           'description' => 'required|sometimes'
        ]);

        $task->update($request->all());

        return response()->json([
            'message' => 'Great success! Task updated',
            'task' => $task
        ]);
    }

    public function destory(Task $task)
    {
        $task->delete();

        return response()->json([
            'message' => 'Successfully deleted task!'
        ]);
    }
}
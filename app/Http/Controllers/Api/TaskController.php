<?php

namespace App\Http\Controllers\Api;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use App\Http\Requests\CreateTaskRequest;
use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::query()->get();

        return TaskResource::collection($tasks);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateTaskRequest $request)
    {
        $newTask = Task::create($request->validated());

        $task = Task::find($newTask->id);

        return $this->createdResponse("Task created successfully", new TaskResource($task));
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        $taskResource = new TaskResource($task);

        return $this->successResponse("Task retrieved successfully", $taskResource);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task->update($request->validated());

        return $this->successResponse("Task updated successfully", new TaskResource($task));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return $this->noContentResponse();
    }
}

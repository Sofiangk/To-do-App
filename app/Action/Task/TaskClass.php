<?php

namespace App\Action\Task;

use App\Http\Requests\TaskStoreRequest;
use App\Http\Requests\TaskUpdateRequest;
use App\Models\Task;
use http\Env\Request;

class TaskClass
{
public function index(){
$tasks = Task::all();
return response()->json($tasks);

}

public function store(TaskStoreRequest $request){

    $input = $request->validated();

    $task = Task::create($input);
    return response()->json($task);


}

public function show(string $id,Task $task){
    return response()->json($task);

}
public function update(TaskUpdateRequest $request,Task $task){

    $input = $request->validated();

    $task->update($input);
    return response()->json($task);

}

public function destroy(Task $task){
    $task->delete();
    return response()->json($task);
}
}

<?php

namespace App\Http\Controllers\Api;

use App\Action\Task\TaskClass;
use App\Http\Controllers\Controller;
use App\Http\Requests\TaskStoreRequest;
use App\Http\Requests\TaskUpdateRequest;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = app(TaskClass::class)->index();
        return response()->json($data, 201);    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskStoreRequest $request)
    {
        $data = app(TaskClass::class)->store($request);
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = app(TaskClass::class)->show();
        return response()->json($data, 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskUpdateRequest $request, string $id)
    {
        $data = app(TaskClass::class)->update($request);
        return response()->json($data, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = app(TaskClass::class)->destroy();
        return response()->json($data, 201);
    }
}

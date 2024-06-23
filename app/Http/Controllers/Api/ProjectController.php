<?php

namespace App\Http\Controllers\Api;

use App\Action\Project\ProjectClass;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectStoreRequest;
use App\Http\Requests\ProjectUpdateRequest;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = app(ProjectClass::class)->index();
        return response()->json($data, 201);    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectStoreRequest $request)
    {
        $data = app(ProjectClass::class)->store($request);
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = app(ProjectClass::class)->show();
        return response()->json($data, 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectUpdateRequest $request, string $id)
    {
        $data = app(ProjectClass::class)->update($request);
        return response()->json($data, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = app(ProjectClass::class)->destroy();
        return response()->json($data, 201);
    }
}

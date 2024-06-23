<?php

namespace App\Action\Project;

use App\Http\Requests\ProjectStoreRequest;
use App\Http\Requests\ProjectUpdateRequest;
use App\Models\Project;

class ProjectClass
{
    public function index(){

$project = Project::all();

return response()->json($project);
    }

    public function store(ProjectStoreRequest $request){

        $input = $request->validated();

        $project = Project::create($input);

        return response()->json($project);
    }

    public function show(Project $project){

        return response()->json($project);

    }

    public function update(ProjectUpdateRequest $request , Project $project){

        $input = $request->validated();

        $project ->update($input);
        return response()->json($project);

    }

    public function destroy(Project $project){
        $project->delete();

        return response()->json(null, 204);

    }
}

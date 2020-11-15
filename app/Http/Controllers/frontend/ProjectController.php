<?php

namespace App\Http\Controllers\frontend;

use App\Models\Project;
use App\Models\ProjectType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $projects = Project::with('project_type')->where('project_type_id', $id)->paginate(9);
        $projectNames = Project::select('id', 'name_en', 'name_bn')->where('project_type_id', $id)->get();
        $projectType = ProjectType::findOrFail($id);
        return view('pages.frontend.project-type.show', ['projects' => $projects, 'projectType' => $projectType, 'projectNames' => $projectNames]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::with('project_type', 'images')->where('id', $id)->first();
        $projectNames = Project::select('id', 'name_en', 'name_bn')->where('project_type_id', $project->project_type_id)->get();
        $projectType = ProjectType::where('id', $project->project_type_id)->first();

        return view('pages.frontend.projectDetails', ['project' => $project, 'projectType' => $projectType, 'projectNames' => $projectNames]);
    }

    public function show_client_list()
    {
        $clients = Project::paginate(12);

        return view('pages.frontend.client.index', compact('clients'));
    }
}

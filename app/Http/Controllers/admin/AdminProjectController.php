<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectType;

class AdminProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $projects = Project::orderby('id', 'DESC')->get();

        return view('pages.admin.project.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projectTypes = ProjectType::all();
        return view('pages.admin.project.create', ['projectTypes' => $projectTypes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $this->validate($request, [
            'name_en' => 'requierd',
            'name_bn' => 'required',
            'client_name_en' => 'required',
            'client_name_bn' => 'required',
            'address_en' => 'required',
            'address_bn' => 'required',
            'area_en' => 'required',
            'area_bn' => 'required',
            'cost_en' => 'required',
            'cost_bn' => 'required'
        ], [
            'name_en.required' => 'Project name english field is empty',
            'name_bn.required' => 'Project name bangla field is empty',
            'client_name_en.required' => 'Client name english field is empty',
            'client_name_bn.required' => 'Client name bangla field is empty',
            'address_en.required' => 'Address english field is empty',
            'address_bn.required' => 'Address name bangla field is empty',
            'area_en.required' => 'Area in english field is empty',
            'area_bn.required' => 'Area in bangla field is empty',
            'cost_en.required' => 'Cost in english field is empty',
            'cost_bn.required' => 'Cost in bangla field is empty',
        ]);
        */
        echo "<pre>";
        print_r($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::with('images')->findOrFail($id);

        return view('pages.admin.project.show', ['project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::with('images')->findOrFail($id);

        return view('pages.admin.project.edit', ['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

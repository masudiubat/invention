<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectType;
use Brian2694\Toastr\Facades\Toastr;

class AdminProjectTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectTypes = ProjectType::all();

        return view('pages.admin.project-type.index', ['projectTypes' => $projectTypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.project-type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_en' => 'required',
            'name_bn' => 'required'
        ], [
            'name_en.required' => 'Project category english name is empty',
            'name_bn.required' => 'Project category bangla name is empty'
        ]);

        $projectType = new ProjectType();

        if ($request->has('name_en')) {
            $projectType->name_en = $request->input('name_en');
        }

        if ($request->has('name_bn')) {
            $projectType->name_bn = $request->input('name_bn');
        }

        if ($request->has('description_en')) {
            $projectType->description_en = $request->input('description_en');
        }


        if ($request->has('description_bn')) {
            $projectType->description_bn = $request->input('description_bn');
        }

        $projectType->created_at = date('Y-m-d');

        $result = $projectType->save();

        if ($result) {
            Toastr::success('Project Category info has saved.', 'success');
            return redirect()->back();
        } else {
            Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projectType = ProjectType::findOrFail($id);

        return view('pages.admin.project-type.show', ['projectType' => $projectType]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projectType = ProjectType::findOrFail($id);

        return view('pages.admin.project-type.edit', ['projectType' => $projectType]);
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
        $this->validate($request, [
            'name_en' => 'required',
            'name_bn' => 'required'
        ], [
            'name_en.required' => 'Project category english name is empty',
            'name_bn.required' => 'Project category bangla name is empty'
        ]);

        $projectType = ProjectType::findOrFail($id);

        if ($request->has('name_en')) {
            $projectType->name_en = $request->input('name_en');
        }

        if ($request->has('name_bn')) {
            $projectType->name_bn = $request->input('name_bn');
        }

        if ($request->has('description_en')) {
            $projectType->description_en = $request->input('description_en');
        }


        if ($request->has('description_bn')) {
            $projectType->description_bn = $request->input('description_bn');
        }

        $projectType->updated_at = date('Y-m-d');

        $result = $projectType->save();

        if ($result) {
            Toastr::success('Project Category info has updated.', 'success');
            return redirect()->back();
        } else {
            Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projectType = ProjectType::findOrFail($id);

        $result = $projectType->delete();

        if ($result) {
            Toastr::success('Project category has deleted.', 'success');
            return redirect()->route('admin.adminproject.type.index');
        } else {
            Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
            return redirect()->back();
        }
    }
}

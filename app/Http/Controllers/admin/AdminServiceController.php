<?php

namespace App\Http\Controllers\admin;

use File;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Storage;

class AdminServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();

        return view('pages.admin.service.index', ['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.service.create');
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
            'name_bn' => 'required',
            'file' => 'image|mimes:jpeg,png,jpg',
        ], [
            'name_en.required' => 'English name is empty',
            'name_bn.required' => 'Bangla name is empty',
            'file.image' => 'File should be an Image.',
            'file.mimes' => 'File should be jpeg, png, jpg.',
        ]);

        $number = Service::select('id')->orderby('id', 'desc')->first();
        $imageNumber = $number->id + 1;
        $service = new Service();

        if ($request->has('file')) {
            $image = $request->file('file');

            $newImageName = "service_" . $imageNumber . '.' . $image->getClientOriginalExtension();

            $destinationPath = 'public/services';
            $path = $request->file('file')->storeAs($destinationPath, $newImageName);
            $service->image = $newImageName;
        }

        if ($request->has('name_en')) {
            $service->name_en = $request->input('name_en');
        }

        if ($request->has('name_bn')) {
            $service->name_bn = $request->input('name_bn');
        }

        if ($request->has('description_en')) {
            $service->description_en = $request->input('description_en');
        }

        if ($request->has('description_bn')) {
            $service->description_bn = $request->input('description_bn');
        }


        $service->created_at = date('Y-m-d');

        $result = $service->save();

        if ($result) {
            Toastr::success('Service info has saved.', 'success');
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
        $service = Service::findOrFail($id);
        return view('pages.admin.service.show', ['service' => $service]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);

        return view('pages.admin.service.edit', ['service' => $service]);
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
            'name_bn' => 'required',
            'file' => 'image|mimes:jpeg,png,jpg',
        ], [
            'name_en.required' => 'English name is empty',
            'name_bn.required' => 'Bangla name is empty',
            'file.image' => 'File should be an Image.',
            'file.mimes' => 'File should be jpeg, png, jpg.',
        ]);

        $service = Service::findOrFail($id);

        if ($request->has('file')) {
            $image = $request->file('file');
            $databaseImage = explode('.', $service->image);
            $imageName = $databaseImage[0];

            $NewImageName = $imageName . '.' . $image->getClientOriginalExtension();

            $destinationPath = 'public/services';
            $path = $request->file('file')->storeAs($destinationPath, $NewImageName);
        }

        if ($request->has('name_en')) {
            $service->name_en = $request->name_en;
        }

        if ($request->has('name_bn')) {
            $service->name_bn = $request->name_bn;
        }

        if ($request->has('description_en')) {
            $service->description_en = $request->description_en;
        }

        if ($request->has('description_bn')) {
            $service->description_bn = $request->description_bn;
        }


        $service->updated_at = date('Y-m-d');

        $result = $service->save();

        if ($result) {
            Toastr::success('Service info has updated.', 'success');
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
        $service = Service::findOrFail($id);

        if ($service->image) {
            Storage::delete('public/services/' . $service->image);
        }

        $result = $service->delete();

        if ($result) {
            Toastr::success('Service has deleted.', 'success');
            return redirect()->route('admin.adservice.index');
        } else {
            Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
            return redirect()->back();
        }
    }
}

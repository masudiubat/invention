@extends('layouts.admin')

@section('title', 'Project Details')

@section('breathcam', 'Project Details')

@push('css')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush

@section('content')
<div class="row">
    <div class="offset-md-1 col-md-10">
        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-header">
                <h3 class="card-title">Project Details</h3>

                <div class="card-tools">
                    <ul class="pagination pagination-sm float-right">
                        <li class="page-item">
                            <a href="{{route('admin.adproject.index')}}" title="Back" data-placement="top" data-toggle="tooltip" data-original-title="Back" class="btn btn-info btn-xs tooltips">
                                <i class="fa fa-list" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="page-item"> &nbsp; </li>
                        <li class="page-item">
                            <a href="{{route('admin.adproject.create')}}" title="New Project" data-placement="top" data-toggle="tooltip" data-original-title="New Project" class="btn btn-success btn-xs tooltips">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="page-item"> &nbsp; </li>
                        <li class="page-item">
                            <a href="{{route('admin.adproject.edit', $project->id)}}" title="Edit" data-placement="top" data-toggle="tooltip" data-original-title="Edit" class="btn btn-info btn-xs tooltips">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="page-item"> &nbsp; </li>
                        <li class="page-item">
                            <a href="#" title="Delete Customer" data-placement="top" data-toggle="tooltip" data-original-title="Delete Customer" class="btn btn-danger btn-xs tooltips">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                            <form id="delete-project" action="#" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </li>
                        <li class="page-item"></li>
                    </ul>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
                        <div class="col-12">
                            <img src="{{ asset('storage/cover-photos/'. $project->cover_image)}}" style="height:515px" class="product-image" alt="Product Image">
                        </div>
                        <div class="col-12 product-image-thumbs">
                            <div class="product-image-thumb active"><img src="{{ asset('storage/cover-photos/'. $project->cover_image)}}" alt="Product Image"></div>
                            @if(!$project->images->isEmpty())
                            @foreach($project->images as $image)
                            <div class="product-image-thumb"><img src="{{ asset('storage/images/'. $image->image)}}" alt="Product Image"></div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Project Name</th>
                                    <th>{{ $project->name_en }}</th>
                                </tr>
                                <tr>
                                    <th>প্রকল্পের নাম</th>
                                    <th>{{ $project->name_bn }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Owner Name</td>
                                    <td>{{ $project->client_name_en }} </td>
                                </tr>
                                <tr>
                                    <td>মালিকের নাম</td>
                                    <td>{{ $project->client_name_bn }} </td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>{{ $project->address_en }} </td>
                                </tr>
                                <tr>
                                    <td>ঠিকানা</td>
                                    <td>{{ $project->address_bn }} </td>
                                </tr>
                                <tr>
                                    <td>Area</td>
                                    <td>{{ $project->area_en }} Square feet </td>
                                </tr>
                                <tr>
                                    <td>আয়তন</td>
                                    <td>{{ $project->area_bn }} স্কোয়ার ফিট</td>
                                </tr>
                                <tr>
                                    <td>Cost</td>
                                    <td>{{ $project->cost_en }} Almost taka</td>
                                </tr>
                                <tr>
                                    <td>খরচ</td>
                                    <td>{{ $project->cost_bn }} টাকা প্রায়</td>
                                </tr>
                                <tr>
                                    <td>Start Date</td>
                                    <td>{{ date('d-m-Y', strtotime($project->started_at))  }}</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>{{ $project->status }}</td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="row mt-4">
                    <nav class="w-100">
                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                            <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">বর্ণনা</a>
                        </div>
                    </nav>
                    <div class="tab-content p-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                            {{ $project->description_en }}
                        </div>
                        <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                            {{ $project->description_bn }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection

@push('js')
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/admin/dist/js/demo.js')}}"></script>
@endpush
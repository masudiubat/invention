@extends('layouts.admin')

@section('title', 'New Project')

@section('breathcam', 'New Project')

@push('css')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/summernote/summernote-bs4.css')}}">
<link href="{{ asset('assets/admin/css/fileinput.css')}}" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/admin/custom-style.css')}}">
@endpush

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Add New Project</h3>

                <div class="card-tools">
                    <a href="{{route('admin.adproject.index')}}" title="Back" data-placement="top" data-toggle="tooltip" data-original-title="Back" class="btn btn-success tooltips">
                        <i class="fa fa-list" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <form id="form" action="{{ route('admin.adproject.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-success {{ $errors->has('name_en') ? 'has-error' : '' }}">
                                <label for="projectNameEnglish">Project Name (English)<span class="text-danger"> * </span></label>
                                <input type="text" name="name_en" value="{{old('name_en')}}" class="form-control" id="projectNameEnglish" placeholder="Enter Project Name">
                                <span class="text-danger">{{ $errors->first('name_en') }}</span>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group has-success {{ $errors->has('name_bn') ? 'has-error' : '' }}">
                                <label for="projectNameBangla">Project Name (Bangla)<span class="text-danger"> * </span></label>
                                <input type="text" name="name_bn" value="{{old('name_bn')}}" class="form-control" id="projectNameBangla" placeholder="Enter Project Name">
                                <span class="text-danger">{{ $errors->first('name_bn') }}</span>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group has-success {{ $errors->has('client_name_en') ? 'has-error' : '' }}">
                                <label for="clientName">Client Name (English)<span class="text-danger"> * </span></label>
                                <input type="text" name="client_name_en" value="{{old('client_name_en')}}" class="form-control" id="clientName" placeholder="Enter Client Name">
                                <span class="text-danger">{{ $errors->first('client_name') }}</span>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group has-success {{ $errors->has('client_name_bn') ? 'has-error' : '' }}">
                                <label for="clientNameBangla">Client Name (Bangla)<span class="text-danger"> * </span></label>
                                <input type="text" name="client_name_bn" value="{{old('client_name_bn')}}" class="form-control" id="clientNameBangla" placeholder="Enter Client Name">
                                <span class="text-danger">{{ $errors->first('client_name_bn') }}</span>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-success {{ $errors->has('address_bn') ? 'has-error' : '' }}">
                                <label for="addressEnglish">Address (English)<span class="text-danger"> * </span></label>
                                <input type="text" name="address_en" value="{{old('address_en')}}" class="form-control" id="addressEnglish" placeholder="Enter Address">
                                <span class="text-danger">{{ $errors->first('address_en') }}</span>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group has-success {{ $errors->has('address_bn') ? 'has-error' : '' }}">
                                <label for="addressBangla">Address (Bangla)<span class="text-danger"> * </span></label>
                                <input type="text" name="address_bn" value="{{old('address_bn')}}" class="form-control" id="addressBangla" placeholder="Enter Address">
                                <span class="text-danger">{{ $errors->first('address_bn') }}</span>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group has-success {{ $errors->has('area_en') ? 'has-error' : '' }}">
                                <label for="areaEnglish">Area in square feet (English)<span class="text-danger"> * </span></label>
                                <input type="text" name="area_en" value="{{old('area_en')}}" class="form-control" id="areaEnglish" placeholder="Enter Area">
                                <span class="text-danger">{{ $errors->first('area_en') }}</span>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group has-success {{ $errors->has('area_bn') ? 'has-error' : '' }}">
                                <label for="areaBangla">Area in square feet (Bangla)<span class="text-danger"> * </span></label>
                                <input type="text" name="area_bn" value="{{old('area_bn')}}" class="form-control" id="areaBangla" placeholder="Enter Area">
                                <span class="text-danger">{{ $errors->first('area_bn') }}</span>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-success {{ $errors->has('cost_en') ? 'has-error' : '' }}">
                                <label for="costEnglish">Cost in BDT (English)<span class="text-danger"> * </span></label>
                                <input type="text" name="cost_en" value="{{old('cost_en')}}" class="form-control" id="costEnglish" placeholder="Enter Cost">
                                <span class="text-danger">{{ $errors->first('cost_en') }}</span>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group has-success {{ $errors->has('cost_bn') ? 'has-error' : '' }}">
                                <label for="costBangla">Cost in BDT (Bangla)<span class="text-danger"> * </span></label>
                                <input type="text" name="cost_bn" value="{{old('cost_bn')}}" class="form-control" id="costBangla" placeholder="Enter Cost">
                                <span class="text-danger">{{ $errors->first('cost_bn') }}</span>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group has-success">
                                <label for="startDate">Start Date</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="started_at" value="{{old('started_at')}}" class="date form-control float-right" id="reservation" placeholder="Select Date">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group has-success">
                                <label for="status">Status</label>
                                <input type="text" name="status" value="{{old('status')}}" class="form-control" id="status" placeholder="Enter Status">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    Project Description
                    <small>(English)</small>
                </h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
                <div class="mb-3">
                    <div class="form-group has-success">
                        <textarea name="description_en" class="summernote" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>
<!-- ./row -->

<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    Project Description
                    <small>(Bangla)</small>
                </h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
                <div class="mb-3">
                    <div class="form-group has-success">
                        <textarea name="description_bn" class="summernote" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>
<!-- ./row -->

<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    Project Images
                    <small class="text-danger">(Minimum a single image and miximum 5 images you can select.)</small>
                </h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body pad main-section">
                <div class="mb-3">
                    <div class="form-group has-success">
                        <div class="file-loading">
                            <input id="file-1" type="file" name="file[]" multiple class="file" data-overwrite-initial="false" data-min-file-count="1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>
<!-- ./row -->

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-success float-right">Submit</button>

            </div>
        </div>
    </div>

</div>

</form>






@endsection

@push('js')
<script src="{{ asset('assets/admin/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/admin/dist/js/demo.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{ asset('assets/admin/js/fileinput.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/js/theme.js')}}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $('.date').datepicker({
        format: 'mm-dd-yyyy'
    });
</script>

<script>
    $(function() {
        // Summernote
        $('.summernote').summernote()
    })
</script>

<script type="text/javascript">
    $("#file-1").fileinput({

        theme: 'fa',

        uploadUrl: "{{route('admin.adproject.store')}}",

        allowedFileExtensions: ['jpg', 'png', 'gif'],

        overwriteInitial: false,

        maxFileSize: 2000,

        maxFilesNum: 10,

        slugCallback: function(filename) {

            return filename.replace('(', '_').replace(']', '_');

        }

    });
</script>
@endpush
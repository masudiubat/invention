@extends('layouts.admin')

@section('title', 'Service Edit')

@section('breathcam', 'Service Edit')

@push('css')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

<!-- summernote -->
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/summernote/summernote-bs4.css')}}">
@endpush

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Edit Service</h3>

                <div class="card-tools">
                    <a href="{{route('admin.adservice.index')}}" title="Back" data-placement="top" data-toggle="tooltip" data-original-title="Back" class="btn btn-success btn-xs tooltips">
                        <i class="fa fa-list" aria-hidden="true"></i>
                    </a>
                    <a href="#" onclick="event.preventDefault(); deleteService('{{ $service->id }}');" title="Delete Service" data-placement="top" data-toggle="tooltip" data-original-title="Delete Service" class="btn btn-danger btn-xs tooltips">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                    <form id="delete-service-{{ $service->id }}" action="{{route('admin.adservice.destroy', $service->id)}}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
            <form id="dropzone" class="dropzone dropzone-previews" action="{{ route('admin.adservice.update', $service->id )}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-success {{ $errors->has('name_en') ? 'has-error' : '' }}">
                                <label for="serviceNameEnglish">Service Name (English)<span class="text-danger"> * </span></label>
                                <input type="text" name="name_en" value="{{ $service->name_en }}" class="form-control" id="serviceNameEnglish" placeholder="Enter Service Name">
                                <span class="text-danger">{{ $errors->first('name_en') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- /.form-group -->
                            <div class="form-group has-success {{ $errors->has('name_bn') ? 'has-error' : '' }}">
                                <label for="projectNameBangla">Project Name (Bangla)<span class="text-danger"> * </span></label>
                                <input type="text" name="name_bn" value="{{ $service->name_bn }}" class="form-control" id="serviceNameBangla" placeholder="Enter Service Name">
                                <span class="text-danger">{{ $errors->first('name_bn') }}</span>
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
                    Service Description
                    <small>(English)</small>
                </h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
                <div class="mb-3">
                    <div class="form-group has-success">
                        <textarea name="description_en" class="summernote" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                        {!! $service->description_en !!}
                        </textarea>
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
                    Service Description
                    <small>(Bangla)</small>
                </h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
                <div class="mb-3">
                    <div class="form-group has-success">
                        <textarea name="description_bn" class="summernote" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                        {!! $service->description_bn !!}
                        </textarea>
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
                <h3 class="card-title"> Service Image </h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body pad main-section">
                <div class="mb-3">
                    <div class="form-group has-success">
                        <div class="file-loading" style="text-align:center;">
                            <img id="output" style="margin-bottom: 20px;" class="img-fluid pad" src="{{ asset('storage/services/'.$service->image) }}" alt="Photo">
                            <input type="file" name="file" class="file" accept="image/*" onchange="loadFile(event)">
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
<script src="{{ asset('assets/admin/js/sweetalert2.min.js')}}"></script>
<script type="text/javascript">
    function deleteService(id) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                document.getElementById('delete-service-' + id).submit();
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    }
</script>
<script>
    $(function() {
        // Summernote
        $('.summernote').summernote()
    })
</script>

<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
@endpush
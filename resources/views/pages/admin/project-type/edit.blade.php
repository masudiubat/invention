@extends('layouts.admin')

@section('title', 'Project Category Edit')

@section('breathcam', 'Project Category Edit')

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
                <h3 class="card-title">Edit Project Category</h3>

                <div class="card-tools">
                    <a href="{{route('admin.adminproject.type.index')}}" title="Back" data-placement="top" data-toggle="tooltip" data-original-title="Back" class="btn btn-success btn-xs tooltips">
                        <i class="fa fa-list" aria-hidden="true"></i>
                    </a>
                    <a href="#" onclick="event.preventDefault(); deleteProjectType('{{ $projectType->id }}');" title="Delete Project Category" data-placement="top" data-toggle="tooltip" data-original-title="Delete Project Category" class="btn btn-danger btn-xs tooltips">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                    <form id="delete-project-type-{{ $projectType->id }}" action="{{route('admin.adminproject.type.destroy', $projectType->id)}}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
            <form id="dropzone" class="dropzone dropzone-previews" action="{{ route('admin.adminproject.type.update', $projectType->id )}}" method="POST">
                @csrf
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-success {{ $errors->has('name_en') ? 'has-error' : '' }}">
                                <label for="projectTypeNameEnglish">Project Category Name (English)<span class="text-danger"> * </span></label>
                                <input type="text" name="name_en" value="{{ $projectType->name_en }}" class="form-control" id="projectTypeNameEnglish" placeholder="Enter Project Category Name">
                                <span class="text-danger">{{ $errors->first('name_en') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- /.form-group -->
                            <div class="form-group has-success {{ $errors->has('name_bn') ? 'has-error' : '' }}">
                                <label for="projectTypeNameBangla">Project Category Name (Bangla)<span class="text-danger"> * </span></label>
                                <input type="text" name="name_bn" value="{{ $projectType->name_bn }}" class="form-control" id="projectTypeNameBangla" placeholder="Enter Project Type Name">
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
                    Project Category Description
                    <small>(English)</small>
                </h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
                <div class="mb-3">
                    <div class="form-group has-success">
                        <textarea name="description_en" class="summernote" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                        {!! $projectType->description_en !!}
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
                    Project Category Description
                    <small>(Bangla)</small>
                </h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
                <div class="mb-3">
                    <div class="form-group has-success">
                        <textarea name="description_bn" class="summernote" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                        {!! $projectType->description_bn !!}
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
        <div class="card">
            <div class="card-footer">
                <a href="{{route('admin.adminproject.type.index')}}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-success float-right">Update</button>

            </div>
        </div>
    </div>

</div>

</form>






@endsection

@push('js')
<script src="{{ asset('assets/admin/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/admin/dist/js/demo.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{ asset('assets/admin/js/sweetalert2.min.js')}}"></script>
<script type="text/javascript">
    function deleteProjectType(id) {
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
                document.getElementById('delete-project-type-' + id).submit();
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

@endpush
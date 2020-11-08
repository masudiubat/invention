@extends('layouts.admin')

@section('title', 'Project Category Details')

@section('breathcam', 'Project Category Details')

@push('css')

@endpush

@section('content')
<div class="row">
    <div class="offset-md-1 col-md-10">
        <div class="card">
            <div class="card-header">
                <div class="user-block">
                    <span>Project Category Details</span>

                </div>
                <!-- /.user-block -->
                <div class="card-tools">
                    <a href="{{route('admin.adminproject.type.index')}}" title="Project Categories" data-placement="top" data-toggle="tooltip" data-original-title="Project Categories" class="btn btn-info btn-xs tooltips">
                        <i class="fa fa-list" aria-hidden="true"></i>
                    </a>

                    <a href="{{route('admin.adminproject.type.edit', $projectType->id)}}" title="Project Category Edit" data-placement="top" data-toggle="tooltip" data-original-title="Project Category Edit" class="btn btn-success btn-xs tooltips">
                        <i class="fa fa-edit" aria-hidden="true"></i>
                    </a>

                    <a href="#" onclick="event.preventDefault(); deleteProjectType('{{ $projectType->id }}');" title="Delete Project Category" data-placement="top" data-toggle="tooltip" data-original-title="Delete Project Category" class="btn btn-danger btn-xs tooltips">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                    <form id="delete-project-type-{{ $projectType->id }}" action="{{route('admin.adminproject.type.destroy', $projectType->id)}}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="card-body">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">{{ $projectType->name_en }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="display: block;">
                        {!! $projectType->description_en !!}
                    </div>
                    <!-- /.card-body -->
                </div>

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">{{ $projectType->name_bn }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="display: block;">
                        {!! $projectType->description_bn !!}
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
            <!-- /.card-body -->

        </div>
    </div>
</div>
<!-- /.row -->

@endsection
@push('js')
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
@endpush
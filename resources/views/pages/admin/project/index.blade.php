@extends('layouts.admin')

@section('title', 'Projects')

@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endpush

@section('breathcam', 'Projects')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Projects</h3>
                    </div>
                    <div class="col-md-2">
                        <div class="add-new text-right">
                            <a href="{{route('admin.adproject.create')}}" class="btn btn-block btn-primary">New Project </a>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Project Name</th>
                            <th>Porject OWner</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                        <tr>
                            <td>{{ $project->name_en }}</td>
                            <td>{{ $project->client_name_en }}</td>
                            <td>{{ $project->address_en }}</td>
                            <td>
                                <a href="{{route('admin.adproject.show', $project->id)}}" title="Project Details" data-placement="top" data-toggle="tooltip" data-original-title="Project Details" class="btn btn-info btn-xs tooltips">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>

                                <a href="{{route('admin.adproject.edit', $project->id)}}" title="Edit" data-placement="top" data-toggle="tooltip" data-original-title="Edit" class="btn btn-success btn-xs tooltips">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>

                                <a href="#" title="Delete Customer" data-placement="top" data-toggle="tooltip" data-original-title="Delete Customer" class="btn btn-danger btn-xs tooltips">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                                <form id="delete-project" action="#" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Project Name</th>
                            <th>Porject OWner</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection

@push('js')
<!-- DataTables -->
<script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
@endpush
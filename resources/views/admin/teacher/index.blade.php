@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Teacher Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Teachers</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                          <th>ID</th>
                          <th>Class Name</th>
                          <th>Teacher Name</th>
                          <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($data as $key => $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->class_name }}</td>
                                <td>{{ $row->teacher_name }}</td>
                                <td>
                                    <a href="{{route('teachers.edit', $row->id)}}" class="btn btn-info">Edit</a>
                                    <a href="{{route('teachers.delete', $row->id)}}" class="btn btn-danger ">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')

@endpush

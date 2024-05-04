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
              <li class="breadcrumb-item active">Class Tables</li>
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
                <h3 class="card-title">All Classes</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                          <th>ID</th>
                          <th>Class Name</th>
                          <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($class as $key => $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->class_name }}</td>
                                <td>
                                    <a href="{{route('class.edit', $row->id)}}" class="btn btn-info">Edit</a>
                                    <a href="{{route('class.delete', $row->id)}}" class="btn btn-danger delete">Delete</a>
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
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

@endpush

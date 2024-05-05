@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">{{ __('Edit Teacher')}}
                </div>
                <div class="card-body">
                    @if(session()->has('success'))
                    <strong class="text-success">{{session()->get('success')}}</strong>
                    @endif
                    <form action="{{ route('teachers.update', ['id' => $teacher->id]) }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $teacher->id }}">
                        <div class="mb-3">
                            <label class="form-label">Class Name</label>
                            <select name="class_id" class="form-control" id="">
                            @foreach($class as $row)
                            <option value="{{$row->id}}" @if($row->id == $teacher->class_id) selected @endif >{{$row->class_name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Teacher Name</label>
                            <input type="text" class="form-control" name="teacher_name" value="{{ $teacher->teacher_name }}">
                        </div>
                        <input type="hidden" name="_method" value="PUT">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

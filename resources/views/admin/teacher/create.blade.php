@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">{{ __('Add New Teacher')}}
                </div>
                <div class="card-body">
                    @if(session()->has('success'))
                    <strong class="text-success">{{session()->get('success')}}</strong>

                    @endif
                    <form action="{{route('teachers.store')}}" method="GET">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Class Name</label>
                            <select name="class_id" class="form-control" id="">
                            @foreach($class as $row)
                            <option value="{{$row->id}}">{{$row->class_name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Teacher Name</label>
                            <input type="text" class="form-control @error('teacher_name') is-invalid @enderror" id="teacher_name" name="teacher_name" placeholder="Teacher name" value="{{old('teacher_name')}}">
                        @error('teacher_name')
                        <span class="invalid-feedback" roll="alert">
                            <strong>{{$message}}</strong>
                        </span>

                        @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

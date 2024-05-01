@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">{{ __('Add New Student')}}
                <a  href="{{route('students.index')}}" class="btn btn-sm btn-primary" style="float:right;">All Student</a>
                </div>
                <div class="card-body">
                    @if(session()->has('success'))
                    <strong class="text-success">{{session()->get('success')}}</strong>

                    @endif
                    <form action="{{route('students.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Class Name</label>
                            <select name="class_id" class="form-control" id="">
                            @foreach($classes as $row)
                            <option value="{{$row->id}}">{{$row->class_name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Student Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$student->name}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Student Roll</label>
                            <input type="text" class="form-control" id="roll" name="roll" value="{{$student->roll}}">

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Student Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{$student->email}}">

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Student Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{$student->phone}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

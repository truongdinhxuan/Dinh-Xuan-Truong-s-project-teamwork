@extends('enrollments/master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Course for Student</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('enrollments.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('enrollments.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student:</strong>
                <select name="student_id" class="form-control">
                    <option value="">Select Student</option>
                    @foreach ($students as $student)
                        <option value="{{ $student->id }}">{{ $student->student_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Course:</strong>
                <select name="course_id" class="form-control">
                    <option value="">Select Course</option>
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
    @endsection

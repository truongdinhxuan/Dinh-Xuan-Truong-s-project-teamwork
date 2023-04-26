@extends('enrollments/master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Enrollment</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('enrollments.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student:</strong>
                {{ $enrollment->student->student_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Course:</strong>
                {{ $enrollment->course->course_name }}
            </div>
        </div>
    </div>
@endsection
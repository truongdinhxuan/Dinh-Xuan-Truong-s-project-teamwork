@extends('students/master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Teacher Course</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('teachercourse.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Teacher:</strong>
                {{ $teacherCourse->teacher->teacher_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Course:</strong>
                {{ $teacherCourse->course->course_name }}
            </div>
        </div>
    </div>
@endsection
@extends('students/master   ')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Teacher Course</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('teachercourse.index') }}"> Back</a>
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

    <form action="{{ route('teachercourse.update', $teacherCourse->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Teacher:</strong>
                    <select name="teacher_id" class="form-control">
                        @foreach($teachers as $teacher)
                            <option value="{{ $teacher->id }}" {{ $teacherCourse->teacher_id == $teacher->id ? 'selected' : '' }}>
                                {{ $teacher->teacher_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Course:</strong>
                    <select name="course_id" class="form-control">
                        @foreach($courses as $course)
                            <option value="{{ $course->id }}" {{ $teacherCourse->course_id == $course->id ? 'selected' : '' }}>
                                {{ $course->course_name }}
                            </option>
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
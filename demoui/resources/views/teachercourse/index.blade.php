@extends('students/master')

@section('content')
<div class="container">
    <h1>All Teacher Courses</h1>

    <a href="{{ route('teachercourse.create') }}" class="btn btn-primary">Assign Teacher to Course</a>

    <table class="table">
        <thead>
            <tr>
                <th>Course</th>
                <th>Teacher</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teacherCourses as $teacher_course)
                <tr>
                    <td>{{ $teacher_course->course->course_name }}</td>
                    <td>{{ $teacher_course->teacher->teacher_name }}</td>
                    <td>
                        
                        <form action="{{ route('teachercourse.destroy',  $teacher_course->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('teachercourse.show', $teacher_course->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('teachercourse.edit',  $teacher_course->id) }}" class="btn btn-warning">Edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
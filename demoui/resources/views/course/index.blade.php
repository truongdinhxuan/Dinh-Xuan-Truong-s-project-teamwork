@extends('course/master')
@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

{{-- thêm header --}}
{{-- @include('header') --}}


<h1>Courses</h1> 
    <a href="{{ route('course.create') }}" class="btn btn-primary">Create Course</a>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($course as $course)
                <tr>
                    <td>{{ $course->course_name }}</td>
                    <td>{{ $course->course_des }}</td>
					{{-- @if($course->teacher->teacher_name !=null)
                    <td>{{ $course->teacher->teacher_name }}</td>
					@endif --}}
                
                    <td>
                        <a href="{{ route('course.show', ['course' => $course->id]) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('course.edit', ['course' => $course->id]) }}" class="btn btn-secondary">Edit</a>
                        <form method="POST" action="{{ route('course.destroy', ['course' => $course->id]) }}" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
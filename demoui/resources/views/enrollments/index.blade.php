@extends('enrollments/master')

@section('content')
<div class="container">
    <h1>Enrollment Management</h1>

    <a href="{{ route('enrollments.create') }}" class="btn btn-primary">Assign Student to Course</a>

    <table class="table">
        <thead>
            <tr>
                <th>Course</th>
                <th>Student</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($enrollment as $enroll)
                <tr>
					<td>{{ $enroll->course->course_name }}</td>
                    <td>{{ $enroll->student->student_name }}</td>
                    <td>
						
                        <form action="{{ route('enrollments.destroy',  $enroll->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('enrollments.show', $enroll->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('enrollments.edit',  $enroll->id) }}" class="btn btn-warning">Edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
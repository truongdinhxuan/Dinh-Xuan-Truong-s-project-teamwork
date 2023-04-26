@extends('course/master')

@section('content')

<h1>Create Course</h1>
    <form method="POST" action="{{ route('course.store') }}">
        @csrf
        <div class="form-group">
            <label for="course_name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="course_name" name="course_name" value="{{ old('course_name') }}">
            @error('course_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="course_des">Description</label>
            <textarea class="form-control @error('course_des') is-invalid @enderror" id="course_des" name="course_des">{{ old('course_des') }}</textarea>
            @error('course_des')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
     
        <button type="submit" class="btn btn-primary">Create Course</button>
    </form>

@endsection('content')

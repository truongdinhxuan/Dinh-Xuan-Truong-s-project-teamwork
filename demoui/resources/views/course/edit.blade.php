@extends('course/master')

@section('content')
{{-- @include('header') --}}
<a href="{{ route('course.index') }}" class="btn btn-primary ">back</a>
<div class="card">
	<div class="card-header">Edit Course</div>
	<div class="card-body">
		<form method="post" action="{{ route('course.update', $course->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">course Name</label>
				<div class="col-sm-10">
					<input type="text" name="course_name" class="form-control" value="{{ $course->course_name }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">course des</label>
				<div class="col-sm-10">
					<input type="text" name="course_des" class="form-control" value="{{ $course->course_des }}" />
				</div>
			</div>
			
			
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $course->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>

{{-- @include('footer') --}}
@endsection('content')
@extends('course/master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>courses Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('course.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>course Name</b></label>
			<div class="col-sm-10">
				{{ $course->course_name }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>course des</b></label>
			<div class="col-sm-10">
				{{ $course->course_des }}
			</div>
		</div>
        
	
	
	</div>
</div>

@endsection('content')
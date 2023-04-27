@extends('students/master')

@section('content')
<div href="{{ route('teacher.index') }}" class="btn btn-primary ">back</div>
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Student Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('teacher.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>teacher Name</b></label>
			<div class="col-sm-10">
				{{ $teacher->teacher_name }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>teacher Email</b></label>
			<div class="col-sm-10">
				{{ $teacher->teacher_email }}
			</div>
		</div>
       
		
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>teacher Image</b></label>
			<div class="col-sm-10">
				<img src="{{ asset('images/' .  $teacher->teacher_image) }}" width="200" class="img-thumbnail" />
			</div>
		</div>
	</div>
</div>

@endsection('content')
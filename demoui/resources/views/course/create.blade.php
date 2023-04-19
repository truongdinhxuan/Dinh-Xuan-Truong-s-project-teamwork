@extends('teacher/master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">Add teacher</div>
	<div class="card-body">
		<form method="post" action="{{ route('teacher.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">teacher Name</label>
				<div class="col-sm-10">
					<input type="text" name="teacher_name" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">teacher Email</label>
				<div class="col-sm-10">
					<input type="text" name="teacher_email" class="form-control" />
				</div>
			</div>
			{{-- CATEGORY	 --}}
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">select Course</label>
				<select name="form-control" wire:model.defer = "course_id">
					<option value="">-- select --</option>
					@foreach ($course as $courseItem)
					<option value="{{$courseItem->id}}">{{$courseItem->name}}</option>
					@endforeach
				</select>
			</div>
			{{--  --}}
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">teacher Image</label>
				<div class="col-sm-10">
					<input type="file" name="teacher_image" />
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')

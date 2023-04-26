@extends('students/master')

@section('content')
{{-- @include('header') --}}
<div class="card">
	<div class="card-header">Edit Student</div>
	<div class="card-body">
		<form method="post" action="{{ route('teacher.update', $teacher->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Teacher Name</label>
				<div class="col-sm-10">
					<input type="text" name="teacher_name" class="form-control" value="{{ $teacher->teacher_name }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Teacher Email</label>
				<div class="col-sm-10">
					<input type="text" name="teacher_email" class="form-control" value="{{ $teacher->teacher_email }}" />
				</div>
			</div>
			{{-- <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Teacher Course</label>
				<div class="col-sm-10">
					<input type="text" name="address" class="form-control" value="{{ $student->address }}" />
				</div>
			</div> --}}
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Teacher Image</label>
				<div class="col-sm-10">
					<input type="file" name="teacher_image" />
					<br />
					<img src="{{ asset('images/' . $teacher->teacher_image) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="teacher_image" value="{{ $teacher->teacher_image }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $teacher->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>
{{-- <script>
document.getElementsByName('gender')[0].value = "{{ $student->gender }}";
</script> --}}
{{-- @include('footer') --}}
@endsection('content')
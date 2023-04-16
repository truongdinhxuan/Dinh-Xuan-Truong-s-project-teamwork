@extends('students/master')

@section('content')
{{-- @include('header') --}}
<div class="card">
	<div class="card-header">Edit Student</div>
	<div class="card-body">
		<form method="post" action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Teacher Name</label>
				<div class="col-sm-10">
					<input type="text" name="name" class="form-control" value="{{ $student->name }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Teacher Email</label>
				<div class="col-sm-10">
					<input type="text" name="email" class="form-control" value="{{ $student->email }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Teacher Course</label>
				<div class="col-sm-10">
					<input type="text" name="address" class="form-control" value="{{ $student->address }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Teacher Image</label>
				<div class="col-sm-10">
					<input type="file" name="image" />
					<br />
					<img src="{{ asset('images/' . $student->image) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_image" value="{{ $student->image }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $student->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>
<script>
document.getElementsByName('gender')[0].value = "{{ $student->gender }}";
</script>
{{-- @include('footer') --}}
@endsection('content')
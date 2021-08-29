@extends('students.layout')

@section('content')


<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Add new Students</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{ route('students.index') }}">Back</a>
		</div>
	</div>

</div>

@if ($errors->any())
<div class="alert alert-danger">
	<strong>Wooooooooah...</strong> There were some error with your inputs.<br><br>
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<form action="{{ route('students.store') }}" method="POST">
	@csrf

	<div class="row">
		<div class="col-xs-12 col-md-12">
			<div class="form-group">
				<strong>Student Name :</strong>
				<input type="text" name="studname" class="form-control" placeholder="studname">

			</div>
		</div>
		<div class="col-xs-12 col-md-12">
			<div class="form-group">
				<strong>Course</strong>
				<input type="text" name="course" class="form-control" placeholder="course">
			</div>
		</div>
		<div class="col-xs-12 col-md-12">
			<div class="form-group">
				<strong>Fee</strong>
				<input type="text" name="fee" class="form-control" placeholder="fee">
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
</form>

@endsection

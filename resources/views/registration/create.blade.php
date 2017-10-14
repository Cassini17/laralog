@extends('layouts.master')

@section('content')

	<div class="col-sm-8">
		<h1>Register</h1>
		<form method="POST" action="/register">
			{{ csrf_field() }}
			<div class="form-group">
				<lable for="name">Name:</lable>
				<input type="text" class="form-control" name="name" id="name" required>
			</div>
			<div class="form-group">
				<lable for="email">Email:</lable>
				<input type="text" class="form-control" name="email" id="email" required>
			</div>
			<div class="form-group">
				<lable for="password">Password:</lable>
				<input type="password" class="form-control" name="password" id="password" required>
			</div>
			<div class="form-group">
				<lable for="password_confirmation">Password confirmation:</lable>
				<input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Register</button>
			</div>
			
			@include('layouts.errors')
		</form>
	</div>

@endsection('content')
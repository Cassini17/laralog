@extends ('layouts.master')

@section ('content')
	<div class="col-sm-8 blog-main">
	
		<img src="uploads/avatars/{{ $user->avatar }}" style="width:100px; height:100px; float:left; border-radius:50%; margin-right:25px;">
		<h1>{{ $user->name }}'s profile</h1>
		<form enctype="multipart/form-data" action="/profile" method="POST">
			{{ csrf_field() }}
			<input type="file" name="avatar"></input>
			<input type="submit" class="pull-right btn btn-sm btn-primary"></input>
		</form>
	
	</div>
@endsection ('content')
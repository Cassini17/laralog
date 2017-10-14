@extends ('layouts.master')

@section ('content')
	<div class="col-sm-8 blog-main">
		<div class="blog-post">

            <h2 class="blog-post-title">Publish a post</h2>

			<hr></hr>

            <form method="POST" action="/posts">

				{{ csrf_field() }}

  				<div class="form-group">
    				<label for="title">Title</label>
    				<input type="text" class="form-control" id="title" name="title" required >
  				</div>

  				<div class="form-group">
    				<label for="body">Body</label>
    				<textarea class="form-control" name="body" id="body" required ></textarea>
  				</div>

				<div class="form-group">
 	 				<button type="submit" class="btn btn-primary">Publish</button>
  				</div>
  				
				@include('layouts.errors')

			</form>
			
		</div>
	</div>
@endsection ('content')


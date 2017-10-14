@extends('layouts.master')

@section('content')
	<!-- for datepicker -->

	<script>
		$( function() {
		$( "#datepicker" ).datepicker();
		} );
	</script>
	
	
	<div class="col-sm-8 blog-main">
        	<div class="panel-heading"><h1>Create a Memo</h1><br></div>
            <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/memos">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                            <label for="subject" class="col-md-4 control-label">Subject</label>

                            <div class="col-md-8">
                                <input id="subject" type="text" class="form-control" name="subject" }}" required autofocus>

                                @if ($errors->has('subject'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('cost') ? ' has-error' : '' }}">
                            <label for="cost" class="col-md-4 control-label">Cost</label>

                            <div class="col-md-8">
                                <input id="cost" type="number" class="form-control" name="cost" }}" >

                                @if ($errors->has('cost'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cost') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group" >
                        	<label for="date" class="col-md-4 control-label" >Date</label>
        					<div class="input-group date col-md-8">
        						<input type="text" class="form-control" id="datepicker">
        					</div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('brief') ? ' has-error' : '' }}">
                            <label for="brief" class="col-md-4 control-label">Brief</label>

                            <div class="col-md-8">
                                <textarea id="brief" class="form-control" name="brief" }}" required ></textarea>

                                @if ($errors->has('brief'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('brief') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add memo
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
	</div>

@endsection
@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Change your password</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" method="POST" action="{{ url('account/password') }}">
					    {!! csrf_field() !!}

					    <div class="form-group">
					        <label class="col-md-4 control-label">Current password</label>
					        <div class="col-md-6">
					        	<input type="password" name="current_password" class="form-control">
					        </div>
					    </div>

					    <div class="form-group">
					        <label class="col-md-4 control-label">New password</label>
					        <div class="col-md-6">
					        	<input type="password" name="password" class="form-control">
					        </div>
					    </div>

					    <div class="form-group">
					        <label class="col-md-4 control-label">Confirm new password</label>
					        <div class="col-md-6">
					        	<input type="password" name="password_confirmation" class="form-control">
					        </div>
					    </div>

					    <div class="form-group">
					    	<div class="col-md-2 col-md-offset-4">
					        	<button type="submit" class="btn btn-primary">Change password</button>
					        </div>
					    </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

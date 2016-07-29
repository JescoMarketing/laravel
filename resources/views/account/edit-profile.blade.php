@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Edit profile</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" method="POST" action="{{ url('account/edit-profile') }}">
					    {!! method_field('PUT') !!}
					    {!! csrf_field() !!}

					    <div class="form-group">
					        <label class="col-md-4 control-label">New name</label>
					        <div class="col-md-6">
					        	<input type="text" name="name" class="form-control" value="{{ old('name', $user->name ) }}">
					        </div>
					    </div>

					    <div class="form-group">
					    	<div class="col-md-2 col-md-offset-4">
					        	<button type="submit" class="btn btn-primary">Update profile</button>
					        </div>
					    </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

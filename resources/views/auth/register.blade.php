@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">@lang('auth.register_title')</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
					    {!! csrf_field() !!}

					    <div class="form-group">
					        <label class="col-md-4 control-label">@lang('validation.attributes.name')</label>
					        <div class="col-md-6">
					        	<input type="text" name="name" value="{{ old('name') }}" class="form-control">
					        </div>
					    </div>

					    <div class="form-group">
					        <label class="col-md-4 control-label">@lang('validation.attributes.username')</label>
					        <div class="col-md-6">
					        	<input type="text" name="username" value="{{ old('username') }}" class="form-control">
					        </div>
					    </div>

					    <div class="form-group">
							<label class="col-md-4 control-label">@lang('validation.attributes.email')</label>
							<div class="col-md-6">
								<input name="email" type="email" class="form-control" value="{{ old('email') }}" >
							</div>
						</div>

					    <div class="form-group">
					        <label class="col-md-4 control-label">@lang('validation.attributes.password')</label>
					        <div class="col-md-6">
					        	<input type="password" name="password" class="form-control">
					        </div>
					    </div>

					    <div class="form-group">
					        <label class="col-md-4 control-label">@lang('validation.attributes.confirm_password')</label>
					        <div class="col-md-6">
					        	<input type="password" name="password_confirmation" class="form-control">
					        </div>
					    </div>

					    <div class="form-group">
					    	<div class="col-md-2 col-md-offset-4">
					        	<button type="submit" class="btn btn-primary">@lang('auth.register_button')</button>
					        </div>
					    </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@extends('layout')

@section('content')	
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Home
			</div>
			<div class="panel-body">
				@lang('auth.welcome_user'){{ Auth::user()->name}}
			</div>
		</div>
	</div>
@endsection
@extends('layout')

@section('content')	
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				My Account
			</div>
			<div class="panel-body">
				<ul>
					<li><a href="{{ url('account/edit-profile') }}">Edit profile</a></li>
					<li><a href="{{ url('account/password') }}">Change password</a></li>
				</ul>
			</div>
		</div>
	</div>
@endsection
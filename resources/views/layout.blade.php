<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('titulo') | Jesco Marketing</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="/css/bootstrap.min.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Jesco Marketing</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					@if (Auth::check())
						<li><a href="{{ url('home') }}">Home</a></li>
						<li><a href="{{ url('account') }}">Account</a></li>
					@endif
					@if (Auth::check() && Access::check(Auth::user()->role, 'editor'))
						<li><a href="{{ url('publish') }}">Publish</a></li>
					@endif
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (!Auth::check())
						<li><a href="{{ route('login') }}">@lang('auth.login_title')</a></li>
						<li><a href="{{ route('register') }}">@lang('auth.register_title')</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ route('logout') }}">@lang('auth.logout_title')</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		@include('partials.errors')
		@include('partials.success')
	</div>
	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script>
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        });
        $('#example').popover(options)
    </script>
	@yield('scripts')
</body>
</html>

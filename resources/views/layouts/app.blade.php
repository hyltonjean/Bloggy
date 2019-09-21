<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Bloggy</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
	<div id="app">
		<nav class="nav has-shadow">
			<div class="container">
				<div class="nav-left">
					<a class="nav-item" href="{{ route('home') }}">
						<img src="{{ asset("images/logo.png") }}" alt="Bloggy Logo" />
					</a>
					<a href="#" class="nav-item is-tab is-hidden-mobile m-l-10">Learn</a>
					<a href="#" class="nav-item is-tab is-hidden-mobile">Discuss</a>
					<a href="#" class="nav-item is-tab is-hidden-mobile">Share</a>
				</div>
				<div class="nav-right">
					@if(Auth::guest())
					<a href="#" class="nav-item is-tab">Login</a>
					<a href="#" class="nav-item is-tab">Join</a>
					@else

					@endif
				</div>
			</div>
		</nav>
		<main class="py-4">
			@yield('content')
		</main>
	</div>
</body>

</html>

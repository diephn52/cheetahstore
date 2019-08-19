<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('partials.AU-head')	
</head>
<body>

	@include('partials.admin-header')

	<div class="container" id="container">
		<br>
		@include('partials._messages')

		@yield('body.content')

	</div><!-- end of .container -->
	
	@include('partials.AU-footer')

	@include('partials.AU-javascript')
	
</body>
</html>
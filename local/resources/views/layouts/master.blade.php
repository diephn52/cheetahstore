<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  	@include('partials.head')
</head>
<body>
    
    @include('partials.header')

	<div id="container" style="opacity: 1;">
		<div id="win-scroll" class="activated">
			
		    @include('partials.slider')

		    @yield('body.content')
		    
		    @include('partials.footer')

		    @include('partials.javascript')

		</div>
    </div>

</body>
</html>
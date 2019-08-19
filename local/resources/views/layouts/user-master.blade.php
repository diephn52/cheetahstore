<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  	@include('partials.AU-head')
</head>
<body>
    
    @include('partials.user-header')
	
	<div class="container" id="container">
   	 	@yield('body.content')
   	</div>
    
    @include('partials.AU-footer')

    @include('partials.AU-javascript')

</body>
</html>
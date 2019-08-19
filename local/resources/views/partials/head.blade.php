<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>CheetahStore @yield('head.title')</title>

<!--GOOGLE FONTS-->
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<!--FONT AWESOME-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--STYLES CSS-->
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
@yield('css')

<!--CAROUSEL CSS-->
<link rel="stylesheet" href="{{ asset('vendors/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendors/css/owl.theme.default.css') }}">

<!--BOOTSTRAP 4-->
<link rel="stylesheet" href="{{ asset('vendors/css/bootstrap.min.css') }}">

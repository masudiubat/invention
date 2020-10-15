<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>@yield('title')</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="apple-touch-icon" href="apple-touch-icon.html">
<!-- Place favicon.ico in the root directory -->

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- All CSS here -->
<!-- bootstrap v3.3.6 CSS -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css')}}">
<!-- animate CSS -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css')}}">
<!-- jquery-ui.min CSS -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery-ui.min.css')}}">
<!-- bootstrap select CSS -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap-select.min.css')}}">
<!-- magnific popup CSS -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css')}}">
<!-- owl.carousel CSS -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.css')}}">
<!-- bxslider CSS -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery.bxslider.css')}}">
<!-- slick CSS -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css')}}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/slick-theme.css')}}">
<!-- font-awesome CSS -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css')}}">
<!-- meanmenu css -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/meanmenu.min.css')}}">
<!-- style CSS -->
<link rel="stylesheet" href="{{ asset('assets/frontend/style.css')}}">
<!-- responsive CSS -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css')}}">
<!-- modernizr CSS -->
<script src="{{ asset('assets/frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>

@stack('css')
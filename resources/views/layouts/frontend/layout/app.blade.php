<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--    favico --}}
    <link rel="icon" sizes="32x32" href="{{ url('/master/frontend/images/favicon.ico') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')-{{ config('app.name', 'Laravel') }}</title>

    <!-- Font -->
    <link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=myanmar3'>
    <link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=zawgyi'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ url('/master/frontend/css/bootstrap.min.css') }}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="{{ url('/master/frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/master/frontend/css/owl.theme.default.css') }}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="{{ url('/master/frontend/css/magnific-popup.css') }}">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" type="text/css" href="{{ url('/master/frontend/css/font-awesome.min.css') }}">

    <!-- Custom stlylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ url('/master/frontend/css/style.css') }}">

    @toastr_css

</head>
<body>
@yield('content')
@include('frontend/partial.footer')

    <!-- jQuery Plugins -->
    <script type="text/javascript" src="{{ url('/master/frontend/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/master/frontend/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/master/frontend/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/master/frontend/js/jquery.magnific-popup.js') }}"></script>
    <script type="text/javascript" src="{{ url('/master/frontend/js/main.js') }}"></script>

    @toastr_js



</body>
</html>

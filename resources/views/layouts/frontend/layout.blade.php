<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@stack('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('frontend')}}/assets/img/favicon.png" rel="icon">
    <link href="{{asset('frontend')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{asset('frontend')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{asset('frontend')}}/assets/css/style.css" rel="stylesheet">

    @stack('style')
</head>

<body id="page-top">

@include('layouts.frontend.header')

@yield('content')

@include('layouts.frontend.footer')

@stack('script')

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>
<!-- Vendor JS Files -->
<script src="{{asset('frontend')}}/assets/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('frontend')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('frontend')}}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="{{asset('frontend')}}/assets/vendor/php-email-form/validate.js"></script>
<script src="{{asset('frontend')}}/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="{{asset('frontend')}}/assets/vendor/counterup/jquery.counterup.min.js"></script>
<script src="{{asset('frontend')}}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="{{asset('frontend')}}/assets/vendor/typed.js/typed.min.js"></script>
<script src="{{asset('frontend')}}/assets/vendor/venobox/venobox.min.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('frontend')}}/assets/js/main.js"></script>

</body>

</html>

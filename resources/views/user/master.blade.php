<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>One Health - Medical Center HTML5 Template</title>

    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/maicons.css">

    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/bootstrap.css">

    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/theme.css">
</head>
<body>

<!-- Back to top button -->
<div class="back-to-top"></div>

<!-- Start header Section -->
@include('user.include.header')
<!-- Start header Section -->



<!-- Start main Section -->
@yield('content')
<!-- End main Section -->



<!-- Start footer Section -->
@include('user.include.footer')
<!-- Start footer Section -->

<script src="{{asset('frontEnd')}}/assets/js/jquery-3.5.1.min.js"></script>

<script src="{{asset('frontEnd')}}/assets/js/bootstrap.bundle.min.js"></script>

<script src="{{asset('frontEnd')}}/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="{{asset('frontEnd')}}/assets/vendor/wow/wow.min.js"></script>

<script src="{{asset('frontEnd')}}/assets/js/theme.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="DJoz Template">
    <meta name="keywords" content="DJoz, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template Fe</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/barfiller.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nowfont.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/rockville.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/albums.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    @include('include.frontend.navbar')
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    @yield('content')

    <!-- Footer Section Begin -->
    @include('include.frontend.footer')

    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('frontend/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.barfiller.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

    <!-- Music Plugin -->
    <script src="{{ asset('frontend/assets/js/jquery.jplayer.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jplayerInit.js') }}"></script>
</body>

</html>
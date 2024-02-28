<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PadhaiKero')</title>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <meta name="author" content="PadhaiKero">
    <meta name="description" content="">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css')}}">
    <link rel="stylesheet" href="{{ asset('css/mmenu.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" id="colors">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&amp;display=swap&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" type="text/css">
</head>
<body class="header-one">
    <!-- Preloader Start -->
    <div class="preloader">
        <div class="utf-preloader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- Preloader End -->
    <div id="main_wrapper">
        @include('Layouts.components.header')
        <div>
            @yield('content')
        </div>
        @include('Layouts.components.footer')
        <div id="bottom_backto_top"><a href="#"></a></div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('scripts/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('scripts/chosen.min.js')}}"></script>
    <script src="{{ asset('scripts/slick.min.js')}}"></script>
    <script src="{{ asset('scripts/rangeslider.min.js')}}"></script>
    <script src="{{ asset('scripts/magnific-popup.min.js')}}"></script>
    <script src="{{ asset('scripts/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('scripts/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('scripts/mmenu.js')}}"></script>
    <script src="{{ asset('scripts/tooltips.min.js')}}"></script>
    <script src="{{ asset('scripts/color_switcher.js')}}"></script>
    <script src="{{ asset('scripts/jquery_custom.js')}}"></script>
    <script src="{{ asset('scripts/typed.js')}}"></script>
    <script>
        var typed = new Typed('.typed-words', {
            strings: ["B-tech", "MBA", "MBBS", "BCA/MCA"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
        });
    </script>
    <script src="{{ asset('assets/js/slider.js')}}"></script>
</body>

</html>
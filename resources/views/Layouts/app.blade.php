<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css')}}">
    <link rel="stylesheet" href="{{ asset('css/mmenu.css')}}">
    <link rel="stylesheet" href="{{ asset('css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" id="colors">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&amp;display=swap&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" type="text/css">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
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
        @livewire('navigation-menu')
        <div class="clearfix"></div>
        <div id="dashboard"> 
        <main>
            {{ $slot }}
        </main>
        </div>
    </div>

    @stack('modals')

    <!-- Scripts -->
    <script src="{{ asset('scripts/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('scripts/chosen.min.js')}}"></script>
    <script src="{{ asset('scripts/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('scripts/slick.min.js')}}"></script>
    <script src="{{ asset('scripts/rangeslider.min.js')}}"></script>
    <script src="{{ asset('scripts/magnific-popup.min.js')}}"></script>
    <script src="{{ asset('scripts/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('scripts/mmenu.js')}}"></script>
    <script src="{{ asset('scripts/tooltips.min.js')}}"></script>
    <script src="{{ asset('scripts/color_switcher.js')}}"></script>
    <script src="{{ asset('scripts/jquery_custom.js')}}"></script>
    <script>
        (function($) {
            try {
                var jscr1 = $('.js-scrollbar');
                if (jscr1[0]) {
                    const ps1 = new PerfectScrollbar('.js-scrollbar');

                }
            } catch (error) {
                console.log(error);
            }
        })(jQuery);
    </script>
   
    @livewireScripts
</body>

</html>
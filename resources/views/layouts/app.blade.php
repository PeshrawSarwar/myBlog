<!doctype html>
<html lang="en">
    <head>
        <!-- Meta Head -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="WbeSite Description">
        <meta name="keywords" content="droosonline, admin, portfolio, laravel, dashboard template, bootstrap, Admin LTE">
        <meta name="author" content="HeshamAdel">
        @stack('meta_og')
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- <script src="{{ asset('front-end/js/jquery/jquery-3.5.1.min.js') }}"></script> --}}
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>

        <script src="https://www.themehorse.com/preview/newscard/wp-content/themes/newscard/assets/library/sticky/jquery.sticky.js?ver=1.0.4"></script>

        <script src="https://www.themehorse.com/preview/newscard/wp-content/themes/newscard/assets/library/sticky/jquery.sticky-settings.js?ver=5.5.1"></script>

        {{-- <script src="{{ asset('front-end/js/library/sticky/jquery.sticky.js') }}"></script>
        <script src="{{ asset('front-end/js/library/sticky/jquery.sticky-settings.js') }}"></script> --}}
        <!-- Title -->
        <title>
            @yield('title', 'pageTitle') |
            @foreach($settings as $setting)
                @if(!empty($setting->name))
                    {{ $setting->name }}
                @else
                    {{ config('app.name', 'laravel') }}
                @endif
            @endforeach
        </title>
        @notifyCss
        <!-- Styles -->

        <link rel="stylesheet" href="{{ asset('front-end/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('front-end/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front-end/css/classy-nav.css') }}">
        <link rel="stylesheet" href="{{ asset('front-end/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('front-end/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('front-end/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front-end/css/themify-icons.css') }}">

        <link rel="stylesheet" href="{{ asset('front-end/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('front-end/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front-end/css/css1/style.css') }}">
        <link rel="stylesheet" href="{{ asset('front-end/js/css/customize-controls.css') }}">

         <link rel="stylesheet" href="{{ asset('front-end/js/library/font-awesome/css/font-awesome.css') }}">
         <link rel="stylesheet" href="{{ asset('front-end/js/library/owl-carousel/owl.carousel.css') }}">
         <link rel="stylesheet" href="{{ asset('front-end/js/library/owl-carousel/owl.carousel.min.css') }}">
    </head>
    <body class="home page-template page-template-templates page-template-front-page-template page-template-templatesfront-page-template-php page page-id-5 theme-body">
        <!-- Preloader -->
        {{-- <div class="preloader d-flex align-items-center justify-content-center">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div> --}}

        <!-- ##### Header Area Start ##### -->
        <header class="header-area">
            @include('layouts.front-end.topheader')
            @include('layouts.front-end.navbar')
        </header>


        <x:notify-messages />
        @notifyJs

        <!-- Start Content -->
        @yield('content')

      {{-- <--   ##### Footer Area Start ##### --> --}}

            @include('layouts.front-end.footer')






         <!-- script File  -->
         <script src="https://kit.fontawesome.com/8458af41f8.js" crossorigin="anonymous"></script>

         <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

         <script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.2.2/web-animations.min.js"></script>
        <script src="{{ asset('front-end/js/bootstrap/popper.min.js') }}"></script>
        <script src="{{ asset('front-end/js/plugins/plugins.js') }}"></script>
        <script src="{{ asset('front-end/js/active.js') }}"></script>
        <script src="{{ asset('front-end/bootstrap/js/bootstrap.js') }}"></script>
        <script src="{{ asset('front-end/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('front-end/js/library/jquery.marquee/jquery.marquee.js') }}"></script>
        <script src="{{ asset('front-end/js/library/jquery.marquee/jquery.marquee.min.js') }}"></script>
        <script src="{{ asset('front-end/js/library/jquery.marquee/jquery.marquee-settings.js') }}"></script>
        <script src="{{ asset('front-end/js/library/owl-carousel/owl.carousel.js') }}"></script>
        <script src="{{ asset('front-end/js/library/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('front-end/js/library/owl-carousel/owl.carousel-settings.js') }}"></script>
        <script src="{{ asset('front-end/js/js/html5.js') }}"></script>
        <script src="{{ asset('front-end/js/js/scripts.js') }}"></script>
        <script src="{{ asset('front-end/js/js/skip-link-focus-fix.js') }}"></script>
        <script src="{{ asset('front-end/js/js/customizer.js') }}"></script>
        <script src="{{ asset('front-end/js/js/customizer-control.js') }}"></script>
    </body>
</html>

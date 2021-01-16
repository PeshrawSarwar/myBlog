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

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>


        <title>

        </title>
        @notifyCss
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('front-end/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('front-end/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front-end/css/css1/style.css') }}">
    </head>
    <body class="home page-template page-template-templates page-template-front-page-template page-template-templatesfront-page-template-php page page-id-5 theme-body">

        <!-- ##### Header Area Start ##### -->
        <!-- Start Content -->

        <div class="mt-5">
            @yield('content')
        </div>

        <x:notify-messages />
        @notifyJs

      {{-- <--   ##### Footer Area Start ##### --> --}}

         <!-- script File  -->
        <script src="{{ asset('front-end/bootstrap/js/bootstrap.js') }}"></script>
        <script src="{{ asset('front-end/bootstrap/js/bootstrap.min.js') }}"></script>

    </body>
</html>

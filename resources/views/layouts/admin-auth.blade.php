<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Smaher">
    <meta name="description" content="Ecommerce Application">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon-->
    <link href="{{ asset('public/favicon.ico')}}" rel="icon">
    <title>{{ config('app.name', 'Laravel') }} Dashboard</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{asset('public/backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Google fonts-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">

    @yield('style')
    <!-- Custom styles for this template-->
    <link href="{{asset('public/backend/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="container">
            @yield('content')
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('public/backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('public/backend/js/sb-admin-2.min.js')}}"></script>
     @yield('script')
</body>

</html>

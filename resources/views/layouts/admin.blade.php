<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Smaher">
    <meta name="description" content="Ecommerce Application">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon-->
    <link href="{{ asset('public/favicon.ico') }}" rel="icon">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Google fonts-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('public/backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('public/backend/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('public/backend/vendor/bootstrap-fileinput/css/fileinput.min.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    @yield('style')
</head>

<body id="page-top">
    <div id="app">
        <!-- Page Wrapper -->
        <div id="wrapper">
            @include('partial.backend.sidebar')
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    @include('partial.backend.navbar')
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                    @include('partial.backend.flash')
                        @yield('content')
                    </div>
                </div>

                @include('partial.backend.footer')
            </div>
        </div>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    </div>
    @include('partial.backend.modal')
    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}"></script>
    <!-- Core plugin JavaScript-->
    {{-- <script src="{{ asset('public/backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script> --}}
    <!-- Custom scripts for all pages-->
    {{-- <script src="{{ asset('public/backend/js/sb-admin-2.min.js') }}"></script> --}}

    <script src="{{ asset('public/backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('public/backend/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('public/backend/js/custom.js') }}"></script>
    <script src="{{ asset('public/backend/vendor/bootstrap-fileinput/js/plugins/piexif.min.js') }}"></script>
    <script src="{{ asset('public/backend/vendor/bootstrap-fileinput/js/plugins/sortable.min.js') }}"></script>
    <script src="{{ asset('public/backend/vendor/bootstrap-fileinput/js/fileinput.min.js') }}"></script>
    <script src="{{ asset('public/backend/vendor/bootstrap-fileinput/themes/fas/theme.min.js') }}"></script>


    @yield('script')
</body>

</html>

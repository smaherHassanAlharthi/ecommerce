<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--
    <meta name="robots" content="all,follow"> --}}
    {{-- أرشفة محركات البحث robots --}}
    {{--
    <meta name="viewport" content="width=device-width, initial-scale=1"> --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon-->
    <link href="{{ asset('public/favicon.ico')}}" rel="icon">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Google fonts-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    <!-- gLightbox gallery-->
    <link rel="stylesheet" href=" {{asset('public/frontend/vendor/glightbox/css/glightbox.min.css') }}">
    <!-- Range slider-->
    <link rel="stylesheet" href=" {{asset('public/frontend/vendor/nouislider/nouislider.min.css') }}">
    <!-- Choices CSS-->
    <link rel="stylesheet" href=" {{asset('public/frontend/vendor/choices.js/public/assets/styles/choices.min.css') }}">
    <!-- Swiper slider-->
    <link rel="stylesheet" href=" {{asset('public/frontend/vendor/swiper/swiper-bundle.min.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href=" {{asset('public/frontend/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('public/frontend/css/custom.css')}}">
</head>

<body>
    <div id="app" class="page-holder"  {{request()->routeIs('frontend.detail') ? 'bg-light' : null }}>
        @include('partial.frontend.header')
        <div class="container">
            @yield('content')
        </div>
        @include('partial.frontend.footer')
    </div>
   <!--  Modal -->
    @include('partial.frontend.modal')

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}"></script>
    <!-- JavaScript files-->
    <script src="{{asset('public/frontend/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('public/frontend/vendor/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('public/frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('public/frontend/vendor/choices.js/public/assets/scripts/choices.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/front.js')}}"></script>
    <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite -
        //   see more here
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {

            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function(e) {
            var div = document.createElement("div");
            div.className = 'd-none';
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // this is set to BootstrapTemple website as you cannot
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');

    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</body>
</html>

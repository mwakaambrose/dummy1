<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109209789-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-109209789-1');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{-- {{ env('APP_NAME', 'ambrose.pro') }} --}} ambrose.pro</title>
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css" />
</head>
<body>
    <div id="app">
        <!-- Header -->
        <header id="header">
            <nav class="left">
                <a href="#menu"><span>Menu</span></a>
                {{-- <a href="#menu"><span>Menu</span></a> --}}
            </nav>
            <a href="/" class="logo">ambrose.pro</a>
            <nav class="right">
                <a href="#" class="button alt">Pricing</a>
                {{-- <a href="#" class="button alt">Pricing</a> --}}
            </nav>
        </header>

        <!-- Menu -->
        {{-- <nav id="menu"> --}}
            {{-- <ul class="links">
                <li><a href="index.html">Home</a></li>
                <li><a href="generic.html">Generic</a></li>
                <li><a href="elements.html">Elements</a></li>
            </ul> --}}
            {{-- <ul class="actions vertical">
                <li><a href="#" class="button fit">Pricing</a></li>
            </ul> --}}
        {{-- </nav> --}}

        @yield('content')

    </div>
    <!-- Footer -->
    {{-- <div class="copyright">
        &copy 2017 ambrose.pro  TrustFinity Developer
    </div> --}}
    <!-- Scripts-->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="js/jquery.scrolly.min.js"></script>
    {{-- <script src="js/skel.min.js"></script> --}}
    {{-- <script src="js/util.js"></script> --}}
    <script src="js/main.js"></script>
</body>
</html>

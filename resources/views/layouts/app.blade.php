<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{-- {{ env('APP_NAME', 'ambrose.pro') }} --}} ambrose.pro</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <strong>ambrose</strong>.pro
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Clients Login</a></li>
                            <li><a href="{{ route('register') }}">Clients Register</a></li>
                            <li><a href="/my-work">My Work</a></li>
                            <li><a href="/how-i-work">How I Work</a></li>
                            <li><a href="/blog"><strong>Blog</strong></a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')


    {{-- <div class="footer">
        <div class="container">
            <div class="col-md-4 contact">
                <h3><strong>Quick About</strong></h3>
                <p>Ambrose.pro is an engineering division of TrustFinity. Its a division that deals with
                the developement, deployment and maintanance of cloud based SaaS products.</p>
                <p>Am here to merge your business with
                    technology.</p>
            </div>
            <div class="col-md-4 contact">
                <h3><strong>Company</strong></h3>

            </div>
            <div class="col-md-2 contact">
                <h3><strong>Services</strong></h3>

            </div>
            <div class="col-md-2 contact">
                <h3><strong>Portfolio</strong></h3>

            </div>
        </div>
        <div class="container">
            <div class="col-md-4">
                <p>&copy 2017 ambrose.pro a <strong>TrustFinity </strong>Engineer</p>
            </div>
        </div>
    </div> --}}
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

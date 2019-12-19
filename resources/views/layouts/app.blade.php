<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SPHAPP') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="/css/styles.css">

    <!-- Scripts -->
    <script src="/js/jquery-3.4.1.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark navbar-laravel bg-dark">
            <div class="container-fluid">
                <img src="/SGOC.png">
                <a class="navbar-brand ml-3" href="{{ url('/') }}">
                    {{ config('app.name', 'SPHAPP') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @else
                        <li class="nav-item dropdown pr-4">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        </div>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-2">
            @include('includes.messages')
        </div>
        <div class="py-4 ml-2 mr-2">
            @yield('content')
        </div>
    </div>

   
    <footer class="footer py-3 fixed-bottom bg-dark text-center">
        <div class="container">
            <span class="text-muted">Created by Werner Barnard.</span>
        </div>
    </footer>

    <script>
        window.setTimeout(function() {
            $(".alert")
                .fadeTo(500, 0)
                .slideUp(500, function() {
                $(this).remove();
                });
            }, 3000);
            @yield('scripts')
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
</body>

</html>
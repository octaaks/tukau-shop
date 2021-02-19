<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tukau</title>

    <!-- Bootsrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Font Awesome CDN -->
    <script src="https://use.fontawesome.com/bc0b680321.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">

    <title> @yield('title')</title>

</head>

<body>

    <!--header-->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="btn-group">
                        <button class="btn border dropdown-toggle my-md-4 my-2 text-white" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">IDR</button>
                        <div class="dropdown-menu">
                            <a href="" class="dropdown-item">USD</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center site-title">
                    <h2 class="my-md-3 front-title text-white">Tukau</h2>
                </div>
                <div class="col-md-4 text-right">
                    <ul class="px-2 navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <p class="my-md-4 header-links">
                            <a href="/tukau/administrator/" class="px-2"> Sign In</a>
                            <a href="/register" class="px-2"> Create Account </a>

                        </p>
                        @if (Route::has('login'))
                        
                        <li class="nav-item">
                            <a class="px-2 nav-link" href="{{ route('login') }}"></a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="px-2 nav-link" href="{{ route('register') }}"></a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <!-- <a class="dropdown-item" href="{{ route('logout') }}" -->
                                <a class="dropdown-item" href="/tukau/administrator/index">
                                    Dashboard
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>

        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}">HOME<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/shope') }}">SHOP</a>
                        </li>

                </div>

                <div class="navbar-nav">
                    <li class="nav-item border rounded-circle mx-2 search-icon">
                        <i class="fas fa-search p-2"></i>
                    </li>
                    <li class="nav-item border rounded-circle mx-2 basket-icon">
                        <i class="fas fa-shopping-basket p-2"></i>
                    </li>
                </div>

            </nav>
        </div>
    </header>

    <!--end header-->

    @yield('container');

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>
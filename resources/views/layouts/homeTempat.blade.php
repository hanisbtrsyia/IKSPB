<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IKSPB</title>
    <link rel="icon" href="assets/images/Pahang.png" type="image/x-icon" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/ui.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link href="assets/css/all.min.css" rel="stylesheet">
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>

</head>

<body>

    <header class="section-header">
        <nav class="navbar navbar-dark navbar-expand p-0" style="background-color:#FFB923;">
            <div class="container">
                <ul class="navbar-nav d-none d-md-flex mr-auto">
                    <!--<li class="nav-item"><a class="nav-link" href="/" style="color:#000;">Laman
                            Utama</a></li>-->
                    <li class="nav-item"><a class="nav-link" href="/homebelibelah" style="color:#000;">Beli-Belah</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/homeTempatMenarik" style="color:#000;">Tempat
                            Menarik</a></li>
                    <li class="nav-item"><a class="nav-link" href="/homeTempatPenginapan" style="color:#000;">Tempat
                            Penginapan</a>
                    </li>
                    <!--<li class="btn-group dropright">
                                        <a href="/homepelancongan" class="btn dropdown-toggle" data-toggle="dropdown"
                                            style="color:#000;"> Pelancongan </a>
                                        <ul class="dropdown-menu dropdown-menu-right" style="max-width: 100px;">
                                            <li><a class="dropdown-item" href="/homeTempatMenarik">Tempat Menarik</a></li>
                                            <li><a class="dropdown-item" href="/homeTempatPenginapan">Tempat Penginapan</a></li>
                                        </ul>
                                    </li>-->
                </ul>
               

            </div> <!-- container //  -->
        </nav> <!-- header-top-light.// -->
        <section class="header-main border-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-12">
                        <h3 class="brand-wrap" style="font-family:verdana">
                            e-Pasar Industri Kecil Sederhana Pahang Barat
                        </h3> <!-- brand-wrap.// -->
                    </div>
                    
                    <div class="col-sm-4 col-12">
                        <div class="widgets-wrap float-md-right">
                            <div class="widget-header  mr-3">
                                @guest
                                {{ Log::info(Auth::check()) }}

                            @endguest
                            @auth
                                {{ Log::info(Auth::user()) }}
                                @if (Auth::user()->role == 'pelanggan')
                                <a href="{{ route('cart.list') }}" class="icon icon-sm rounded-circle border"><i
                                    class="fa fa-shopping-cart"></i></a>
                            
                                @endif
                            @endauth
                            </div>
                            <div class="widget-header icontext">
                                @guest
                                {{ Log::info(Auth::check()) }}

                            @endguest
                            @auth
                                {{ Log::info(Auth::user()) }}
                                @if (Auth::user()->role == 'pelanggan')
                                    <a href="{{ route('profil.Custedit') }}"
                                        class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
                                @endif
                            @endauth
                           
                                <div class="text">
                                    @auth
                                        @if (Auth::user()->role == 'pelanggan')
                                            <span class="text-muted">{{ Auth::user()->name }}</span>
                                            <div>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf

                                                </form>
                                        @endif
                                    @else
                                        
                                        <div>
                                            <a href="{{ route('login') }}">Log Masuk</a> |
                                            <a href="{{ route('register') }}"> Daftar Masuk</a>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        </div> <!-- widgets-wrap.// -->
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- container.// -->
        </section> <!-- header-main .// -->
        <p></p>
        @yield('content')

</body>

</html>

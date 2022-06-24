<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IKSPB</title>
    <link rel="icon" href="../../assets/images/Pahang.png" type="image/x-icon" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../../assets/css/ui.css" rel="stylesheet">
    <link href="../../assets/css/responsive.css" rel="stylesheet">
    <link href="../../assets/css/membuatpesanan.css" rel="stylesheet">
    <link href="../../assets/css/all.min.css" rel="stylesheet">
    <script src="../../assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link type="text/css" rel="stylesheet" href="../../node_modules/lightslider/dist/css/lightslider.css" />
    <script src="../..///ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../node_modules/lightslider/dist/js/lightslider.js"></script>
    
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
                <ul class="navbar-nav">
                    @guest
                    {{ Log::info(Auth::check()) }}
                @endguest
                @auth
                    {{ Log::info(Auth::user()) }}
                    @if (Auth::user()->role == 'pelanggan')
                    <li class="nav-item"><a href="{{ route('profil.Custedit') }}" class="nav-link" style="color:#000;"> Profil
                    </a></li>   
                    @endif
                @endauth
                   <!-- <li class="nav-item"><a href="#" class="nav-link" style="color:#000;"> Call: +0000000000
                        </a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color:#000;">
                            Bahasa
                            Malaysia </a>
                        <ul class="dropdown-menu dropdown-menu-right" style="max-width: 100px;">
                            <li><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">Russian </a></li>
                        </ul>
                    </li>-->
                </ul> <!-- list-inline //  -->

            </div> <!-- container //  -->
        </nav> <!-- header-top-light.// -->
        <section class="header-main border-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-6">
                        <a href="#" class="brand-wrap" style="font-family:verdana">
                            e-Pasar IKS Pahang Barat
                        </a> <!-- brand-wrap.// -->
                    </div>
                    <div class="col-lg-6 col-12 col-sm-12">
                        <form action="#" class="search">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" placeholder="Cari">
                                <div class="input-group-append">
                                    <button class="btn" style="background-color:#FFB923;" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form> <!-- search-wrap .end// -->
                    </div> <!-- col.// -->
                    <div class="col-lg-4 col-sm-6 col-12">
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
                            <span class="badge badge-pill badge-danger notify">0</span>
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
                                        <span class="text-muted">Anda seorang peniaga?</span>
                                        <div>
                                            <a href="{{ route('login') }}">Log Masuk</a> |
                                            <a href="{{ route('register') }}"> Daftar</a>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        </div> <!-- widgets-wrap.// -->
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- container.// -->
        </section> <!-- header-main .// -->
        <nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                    aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link pl-0" data-toggle="dropdown" href="#"><strong> <i
                                        class="fa fa-bars"></i> Kategori</strong></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Makanan Tradisional</a>
                                <a class="dropdown-item" href="#">Makanan Sejuk Beku</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Kerepek</a>
                                <a class="dropdown-item" href="#">Kuih Muih</a>
                                <a class="dropdown-item" href="#">Tempoyak</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Makanan Tradisional</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Makanan Sejuk Beku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kuih Muih</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kerepek</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tempoyak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sambal</a>
                        </li>
                    </ul>
                </div> <!-- collapse .// -->
            </div> <!-- container .// -->
        </nav>
    </header> <!-- section-header.// -->
    <!-- ========================= SECTION INTRO ========================= -->

    @yield('content')


    <section class="footer-bottom row">
        <div class="col-md-2">
            <p class="text-muted"> 2021 Company name </p>
        </div>
        <div class="col-md-8 text-md-center">
            <span class="px-2">info@com</span>
            <span class="px-2">+000-000-0000</span>
            <span class="px-2">Street name 123, ABC</span>
        </div>
        <div class="col-md-2 text-md-right text-muted">
            <i class="fab fa-lg fa-cc-visa"></i>
            <i class="fab fa-lg fa-cc-paypal"></i>
            <i class="fab fa-lg fa-cc-mastercard"></i>
        </div>
    </section>
    </div><!-- //container -->
    </footer>
    <!-- ========================= FOOTER END // ========================= -->

</body>

</html>

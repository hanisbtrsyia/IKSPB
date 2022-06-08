@extends('layouts.master')
@section('title', 'Tempat Menarik')
@section('content')
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

        <div class="content-wrapper">
            <header class="section-header">
                <nav class="navbar navbar-dark navbar-expand p-0" style="background-color:#FFB923;">
                    <div class="container">
                        <ul class="navbar-nav d-none d-md-flex mr-auto">
                            <li class="nav-item"><a class="nav-link" href="/welcome" style="color:#000;">Laman
                                    Utama</a></li>
                            <li class="nav-item"><a class="nav-link" href="/homebelibelah"
                                    style="color:#000;">Beli-Belah</a></li>
                            <li class="btn-group dropright">
                                <a href="/homepelancongan" class="btn dropdown-toggle" data-toggle="dropdown"
                                    style="color:#000;"> Pelancongan </a>
                                <ul class="dropdown-menu dropdown-menu-right" style="max-width: 100px;">
                                    <li><a class="dropdown-item" href="/homeTempatMenarik">Tempat Menarik</a></li>
                                    <li><a class="dropdown-item" href="/homeTempatPenginapan">Tempat Penginapan</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="#" class="nav-link" style="color:#000;"> Call:
                                    +0000000000 </a></li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color:#000;">
                                    Bahasa Malaysia </a>
                                <ul class="dropdown-menu dropdown-menu-right" style="max-width: 100px;">
                                    <li><a class="dropdown-item" href="#">English</a></li>
                                    <li><a class="dropdown-item" href="#">Russian </a></li>
                                </ul>
                            </li>
                        </ul> <!-- list-inline //  -->

                    </div> <!-- container //  -->
                </nav> <!-- header-top-light.// -->
                <br>
                <section class="header-main border-bottom">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-6">
                                <a href="#" class="brand-wrap" style="font-family:verdana; color:#000;">
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
                                <br>
                            </div> <!-- col.// -->
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="widgets-wrap float-md-right">
                                    <div class="widget-header  mr-3">


                                    </div>
                                    <div class="widget-header icontext">

                                        <div class="text">

                                            <div>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- widgets-wrap.// -->
                            </div> <!-- col.// -->
                        </div> <!-- row.// -->
                    </div> <!-- container.// -->
                </section> <!-- header-main .// -->
                <br>
                <h1 style="text-align: center"> Tempat Menarik di Pahang Barat</h1>

                <nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                            aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="main_nav">


                            <div class="col-12">
                                <div class="card card-warning card-outline card-outline-tabs">
                                    <div class="card-header p-0 border-bottom-0">
                                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-four-home-tab" data-toggle="pill"
                                                    href="#custom-tabs-four-home" role="tab"
                                                    aria-controls="custom-tabs-four-home" aria-selected="false">Tempat
                                                    Perkhemahan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-four-profile-tab"
                                                    data-toggle="pill" href="#custom-tabs-four-profile" role="tab"
                                                    aria-controls="custom-tabs-four-profile" aria-selected="false">Tempat
                                                    Bersejarah</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-four-messages-tab"
                                                    data-toggle="pill" href="#custom-tabs-four-messages" role="tab"
                                                    aria-controls="custom-tabs-four-messages"
                                                    aria-selected="false">Hijau-Hijauan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="custom-tabs-four-settings-tab"
                                                    data-toggle="pill" href="#custom-tabs-four-settings" role="tab"
                                                    aria-controls="custom-tabs-four-settings"
                                                    aria-selected="true">Pantai</a>
                                            </li>
                                        </ul>
                                    </div>


                                </div>
                            </div>
                            </ul>
                        </div> <!-- collapse .// -->
                    </div> <!-- container .// -->
                </nav>
            </header> <!-- section-header.// -->
            <!-- ========================= SECTION INTRO ========================= -->

            <!-- ========================= SECTION FEATURE END// ========================= -->
            <!-- ========================= SECTION CONTENT ========================= -->
            <section class="section-content">
                <div class="container">
                    <header class="section-heading">
                        <h3 class="section-title">Tempat popular</h3>
                    </header><!-- sect-heading -->

                    <div class="row">
                        @foreach ($temMenarik as $temMen)
                            <div class="col-md-3">
                                <div href="#" class="card card-product-grid">
                                    <a href="{{ route('TempatMenarik.edit', $temMen->id_tempatMenarik) }}"
                                        class="img-wrap"> <img
                                            src="{{ asset('assets/images/attractions/' . $temMen->gambar) }}"
                                            style="width:261px; height:200px;"> </a>
                                    <figcaption class="info-wrap">
                                        <a type="button"
                                            href="{{ route('TempatMenarik.edit', $temMen->id_tempatMenarik) }}"
                                            class="title">{{ $temMen->NamaTempat }}</a>
                                        <div class="rating-wrap">
                                            <ul class="rating-stars">
                                                <li style="width:80%" class="stars-active">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i>
                                                </li>
                                            </ul>
                                            <span class="label-rating text-muted"> 34 reviws</span>
                                        </div>
                                        <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                                    </figcaption>
                                </div>
                            </div> <!-- col.// -->
                        @endforeach


                    </div> <!-- row.// -->
                </div> <!-- container .//  -->
            </section>
            <!-- ========================= SECTION CONTENT END// ========================= -->
            <!-- ========================= SECTION CONTENT ========================= -->

            <!-- ========================= SECTION CONTENT END// ========================= -->
            <!-- ========================= SECTION CONTENT ========================= -->
            <section class="section-content padding-bottom-sm">
                <div class="container">
                    <header class="section-heading">
                        <a href="#" class="btn btn-outline-primary float-right">See all</a>
                        <h3 class="section-title">Recommended</h3>
                    </header><!-- sect-heading -->
                    <div class="row">
                        <div class="col-md-3">
                            <div href="#" class="card card-product-grid">
                                <a href="#" class="img-wrap"> <img src="assets/images/items/1.jpg"> </a>
                                <figcaption class="info-wrap">
                                    <a href="#" class="title">Just another product name</a>
                                    <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                                </figcaption>
                            </div>
                        </div> <!-- col.// -->
                        <div class="col-md-3">
                            <div href="#" class="card card-product-grid">
                                <a href="#" class="img-wrap"> <img src="assets/images/items/2.jpg"> </a>
                                <figcaption class="info-wrap">
                                    <a href="#" class="title">Some item name here</a>
                                    <div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
                                </figcaption>
                            </div>
                        </div> <!-- col.// -->
                        <div class="col-md-3">
                            <div href="#" class="card card-product-grid">
                                <a href="#" class="img-wrap"> <img src="assets/images/items/3.jpg"> </a>
                                <figcaption class="info-wrap">
                                    <a href="#" class="title">Great product name here</a>
                                    <div class="price mt-1">$56.00</div> <!-- price-wrap.// -->
                                </figcaption>
                            </div>
                        </div> <!-- col.// -->
                        <div class="col-md-3">
                            <div href="#" class="card card-product-grid">
                                <a href="#" class="img-wrap"> <img src="assets/images/items/4.jpg"> </a>
                                <figcaption class="info-wrap">
                                    <a href="#" class="title">Just another product name</a>
                                    <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                                </figcaption>
                            </div>
                        </div> <!-- col.// -->
                    </div> <!-- row.// -->
                </div> <!-- container .//  -->
            </section>
            <!-- ========================= SECTION CONTENT END// ========================= -->
            <!-- ========================= SECTION  ========================= -->
            <section class="section-name bg padding-y-sm">
                <div class="container">
                    <header class="section-heading">
                        <h3 class="section-title">Our Brands</h3>
                    </header><!-- sect-heading -->
                    <div class="row">
                        <div class="col-md-2 col-6">
                            <figure class="box item-logo">
                                <a href="#"><img src="assets/images/logos/logo1.png"></a>
                                <figcaption class="border-top pt-2">36 Products</figcaption>
                            </figure> <!-- item-logo.// -->
                        </div> <!-- col.// -->
                        <div class="col-md-2  col-6">
                            <figure class="box item-logo">
                                <a href="#"><img src="assets/images/logos/logo2.png"></a>
                                <figcaption class="border-top pt-2">980 Products</figcaption>
                            </figure> <!-- item-logo.// -->
                        </div> <!-- col.// -->
                        <div class="col-md-2  col-6">
                            <figure class="box item-logo">
                                <a href="#"><img src="assets/images/logos/logo3.png"></a>
                                <figcaption class="border-top pt-2">25 Products</figcaption>
                            </figure> <!-- item-logo.// -->
                        </div> <!-- col.// -->
                        <div class="col-md-2  col-6">
                            <figure class="box item-logo">
                                <a href="#"><img src="assets/images/logos/logo4.png"></a>
                                <figcaption class="border-top pt-2">72 Products</figcaption>
                            </figure> <!-- item-logo.// -->
                        </div> <!-- col.// -->
                        <div class="col-md-2  col-6">
                            <figure class="box item-logo">
                                <a href="#"><img src="assets/images/logos/logo5.png"></a>
                                <figcaption class="border-top pt-2">41 Products</figcaption>
                            </figure> <!-- item-logo.// -->
                        </div> <!-- col.// -->
                        <div class="col-md-2  col-6">
                            <figure class="box item-logo">
                                <a href="#"><img src="assets/images/logos/logo2.png"></a>
                                <figcaption class="border-top pt-2">12 Products</figcaption>
                            </figure> <!-- item-logo.// -->
                        </div> <!-- col.// -->
                    </div> <!-- row.// -->
                </div><!-- container // -->
            </section>
            <!-- ========================= SECTION  END// ========================= -->
            <!-- ========================= SECTION  ========================= -->
            <section class="section-name padding-y">
                <div class="container">
                    <h3 class="mb-3">Download app demo text</h3>
                    <a href="#"><img src="assets/images/misc/appstore.png" height="40"></a>
                    <a href="#"><img src="assets/images/misc/appstore.png" height="40"></a>
                </div><!-- container // -->
            </section>
            <!-- ========================= SECTION  END// ======================= -->
            <!-- ========================= FOOTER ========================= -->
            <footer class="section-footer border-top bg">
                <div class="container">
                    <section class="footer-top  padding-y">
                        <div class="row">
                            <aside class="col-md col-6">
                                <h6 class="title">Brands</h6>
                                <ul class="list-unstyled">
                                    <li> <a href="#">Adidas</a></li>
                                    <li> <a href="#">Puma</a></li>
                                    <li> <a href="#">Reebok</a></li>
                                    <li> <a href="#">Nike</a></li>
                                </ul>
                            </aside>
                            <aside class="col-md col-6">
                                <h6 class="title">Company</h6>
                                <ul class="list-unstyled">
                                    <li> <a href="#">About us</a></li>
                                    <li> <a href="#">Career</a></li>
                                    <li> <a href="#">Find a store</a></li>
                                    <li> <a href="#">Rules and terms</a></li>
                                    <li> <a href="#">Sitemap</a></li>
                                </ul>
                            </aside>
                            <aside class="col-md col-6">
                                <h6 class="title">Help</h6>
                                <ul class="list-unstyled">
                                    <li> <a href="#">Contact us</a></li>
                                    <li> <a href="#">Money refund</a></li>
                                    <li> <a href="#">Order status</a></li>
                                    <li> <a href="#">Shipping info</a></li>
                                    <li> <a href="#">Open dispute</a></li>
                                </ul>
                            </aside>
                            <aside class="col-md col-6">
                                <h6 class="title">Account</h6>
                                <ul class="list-unstyled">
                                    <li> <a href="#"> User Login </a></li>
                                    <li> <a href="#"> User register </a></li>
                                    <li> <a href="#"> Account Setting </a></li>
                                    <li> <a href="#"> My Orders </a></li>
                                </ul>
                            </aside>
                            <aside class="col-md">
                                <h6 class="title">Social</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
                                    <li><a href="#"> <i class="fab fa-twitter"></i> Twitter </a></li>
                                    <li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
                                    <li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
                                </ul>
                            </aside>
                        </div> <!-- row.// -->
                    </section> <!-- footer-top.// -->
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
    </div>
@endsection

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
                <!-- <nav class="navbar navbar-dark navbar-expand p-0" style="background-color:#FFB923;">
                            <div class="container">
                                <ul class="navbar-nav d-none d-md-flex mr-auto">
                                    <li class="nav-item"><a class="nav-link" href="/" style="color:#000;">Laman
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
                                </ul>

                            </div>
                        </nav>-->
                <!-- header-top-light.// -->
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
                                                    aria-controls="custom-tabs-four-home" aria-selected="false">Bera</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                                                    href="#custom-tabs-four-profile" role="tab"
                                                    aria-controls="custom-tabs-four-profile" aria-selected="false">Cameron
                                                    Highlands</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill"
                                                    href="#custom-tabs-four-messages" role="tab"
                                                    aria-controls="custom-tabs-four-messages" aria-selected="false">Janda
                                                    Baik</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="custom-tabs-four-settings-tab"
                                                    data-toggle="pill" href="#custom-tabs-four-settings" role="tab"
                                                    aria-controls="custom-tabs-four-settings"
                                                    aria-selected="true">Jerantut</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-four-home-tab" data-toggle="pill"
                                                    href="#custom-tabs-four-home" role="tab"
                                                    aria-controls="custom-tabs-four-home"
                                                    aria-selected="false">Kuantan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                                                    href="#custom-tabs-four-profile" role="tab"
                                                    aria-controls="custom-tabs-four-profile"
                                                    aria-selected="false">Lipis</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill"
                                                    href="#custom-tabs-four-messages" role="tab"
                                                    aria-controls="custom-tabs-four-messages"
                                                    aria-selected="false">Maran</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " id="custom-tabs-four-settings-tab"
                                                    data-toggle="pill" href="#custom-tabs-four-settings" role="tab"
                                                    aria-controls="custom-tabs-four-settings"
                                                    aria-selected="true">Pekan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " id="custom-tabs-four-settings-tab"
                                                    data-toggle="pill" href="#custom-tabs-four-settings" role="tab"
                                                    aria-controls="custom-tabs-four-settings"
                                                    aria-selected="true">Raub</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " id="custom-tabs-four-settings-tab"
                                                    data-toggle="pill" href="#custom-tabs-four-settings" role="tab"
                                                    aria-controls="custom-tabs-four-settings"
                                                    aria-selected="true">Rompin</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- collapse .// -->
                    </div> <!-- container .// -->
                </nav>
            </header> <!-- section-header.// -->
            <br>
            <!-- ========================= SECTION CONTENT ========================= -->
            <section class="section-content">
                <div class="container">
                    <header class="section-heading">
                        <!--<h3 class="section-title">Tempat popular</h3>-->
                    </header><!-- sect-heading -->

                    <div class="row">
                        @foreach ($temMenarik as $temMen)
                            <div class="col-md-3">
                                <div href="#" class="card card-product-grid">
                                    <a href="{{ route('TempatMenarik.edit', $temMen->id_tempatMenarik) }}"
                                        class="img-wrap"> <img
                                            src="{{ asset('assets/images/attractions/' . $temMen['gambar'][0]) }}"
                                            style="width:264px; height:200px;"> </a><hr>
                                    <figcaption class="info-wrap" style="text-align: center;">
                                        <a type="button" href="{{ route('TempatMenarik.edit', $temMen->id_tempatMenarik) }}"
                                            class="title" style="color: black; ">{{ $temMen->NamaTempat }}</a>
                                    </figcaption>
                                    
                                    <br>
                                </div>
                            </div> <!-- col.// -->
                        @endforeach
                    </div> <!-- row.// -->
                </div> <!-- container .//  -->
            </section>
            <!-- ========================= SECTION CONTENT END// ========================= -->


        </div>
    </body>

    </html>

@endsection

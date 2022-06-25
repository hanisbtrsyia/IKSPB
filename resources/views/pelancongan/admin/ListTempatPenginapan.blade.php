@extends('layouts.master')
@section('title', 'Tempat Menarik')
@section('content')
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>IKSPB</title>
        <link rel="icon" href="assets/images/items/1.jpg" type="image/x-icon" />
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
                                </ul>

                            </div>
                        </nav>
                        <br>
                        <section class="header-main border-bottom">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-2 col-6">
                                        <a href="#" class="brand-wrap" style="font-family:verdana">
                                            e-Pasar IKS Pahang Barat
                                        </a>
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
                                        </form>
                                        <br>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="widgets-wrap float-md-right">
                                            <div class="widget-header  mr-3">

                                            </div>
                                            <div class="widget-header icontext">

                                                <div class="text">


                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>-->
                <br>
                <h1 style="text-align: center"> Tempat Menginap di Pahang Barat</h1>
                <hr>


                <!-- ========================= SECTION FEATURE END// ========================= -->
                <!-- ========================= SECTION CONTENT ========================= -->
                <section class="section-content">
                    <div class="container">
                        <p></p>
                        <div class="row">
                            @foreach ($temPenginapan as $temPeng)
                                <div class="col-md-3">
                                    <div href="#" class="card card-product-grid">
                                        <a href="{{ route('TempatPenginapan.edit', $temPeng->id_tempatPenginapan) }}"
                                            class="img-wrap"> <img
                                                src="{{ asset('assets/images/penginapan/' . $temPeng['gambar'][0]) }}"
                                                style="width:264px; height:200px;"> </a>
                                        <figcaption class="info-wrap" style="text-align: center;">
                                            <a type="button"
                                                href="{{ route('TempatPenginapan.edit', $temPeng->id_tempatPenginapan) }}"
                                                class="title" style="color: black; ">{{ $temPeng->NamaTempat }}</a>

                                            <div class="price mt-1">RM {{ $temPeng->HargaPerMalam }}</div>
                                            <!-- price-wrap.// -->


                                        </figcaption>
                                    </div>
                                </div> <!-- col.// -->
                            @endforeach

                        </div> <!-- row.// -->
                    </div> <!-- container .//  -->
                </section>


    </body>

    </html>
    </div>
@endsection

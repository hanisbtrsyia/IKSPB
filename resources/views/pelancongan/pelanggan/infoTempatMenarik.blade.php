<?php $page = 'TempatMenarikInfo'; ?>
@extends('layouts.homeInfo')
@section('title', 'Maklumat Tempat Menarik')
@section('content')
    <h1 style="text-align: center"> Tempat Menarik di Pahang Barat</h1>

    <nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link pl-0" data-toggle="dropdown" href="#"><strong> <i class="fa fa-bars"></i>
                                Kategori</strong></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/homeTempatMenarik">Tempat Menarik</a>
                            <a class="dropdown-item" href="/homeTempatPenginapan">Tempat Penginapan</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tempat Perkhemahan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tempat Bersejarah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hijau-Hijauan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pantai</a>
                    </li>
                </ul>
            </div> <!-- collapse .// -->
        </div> <!-- container .// -->
    </nav>
    </header> <!-- section-header.// -->
    <div class="content-wrapper">

        <!-- ========================= SECTION FEATURE END// ========================= -->
        <!-- ========================= SECTION CONTENT ========================= -->
        <section class="section-content">
            <div class="container">
  <br>
                    <h4 class="section-title" style="text-align: center">{{ $temMenarik->NamaTempat }}</h4>
               

                <section class="section-intro padding-y-sm">
                    <div class="container ">
                        <div class="col-12">
                            <div class="d-flex justify-content-center w-100 h-100">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                               
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                </ol>
                                <div class="carousel-inner">
                                    @foreach ($temMenarik['gambar'] as $key => $item)
                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                                       style="width: 100%;
                                       height: 100%;
                                       
                                       margin: auto;">
                                            <img src="{{ asset('assets/images/attractions/' . $item) }}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"> </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- container //  -->
                </section>

                <!-- ========================= SECTION CONTENT END// ========================= -->
                <!-- ========================= SECTION CONTENT ========================= -->

                <div class="row">
                    <div class="col-md-6 center">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title m-0">{{ $temMenarik->NamaTempat }}</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $temMenarik->penerangan }}
                                </p>
                                <a href="#" class="btn btn-warning">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div><!-- //container -->
        </div>
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

                   
 
            </footer>
            <!-- ========================= FOOTER END // ========================= -->
            </body>

            </html>
        @endsection

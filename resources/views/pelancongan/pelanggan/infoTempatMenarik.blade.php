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
                    <div class="container">
                        <div class="col-12 offset-md-3">
                            
                            <div class="d-flex justify-content-center w-50 h-50">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                               
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                </ol>
                                <div class="carousel-inner">
                                    @foreach ($temMenarik['gambar'] as $key => $item)
                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
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
                    <div class="col-md-10 center">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title m-0">{{ $temMenarik->NamaTempat }}</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $temMenarik->penerangan }}
                                </p>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div><!-- //container -->
        </div>
                <!-- ========================= FOOTER ========================= -->
                <footer class="section-footer border-top bg" style="background-color: #1b1b1b;">
                    <div class="container">
                        
                       
                        
                        <section class="footer-bottom row">
                            <div class="col-md-2">
                                <p class="text" style="color: #eeeeee;"> 2022 IKSPB </p>
                            </div>
                            <div class="col-md-10 text-md-right">
                                <span class="px-2" style="color: #eeeeee;">ikspb@iks.my</span>
                                <span class="px-2" style="color: #eeeeee;">+60193883178</span>
                                <span class="px-2" style="color: #eeeeee;">Pahang Barat</span>
                            </div>
                            
                        </section>
                       
                    </div><!-- //container -->
                </footer>
            <!-- ========================= FOOTER END // ========================= -->
            </body>

            </html>
        @endsection

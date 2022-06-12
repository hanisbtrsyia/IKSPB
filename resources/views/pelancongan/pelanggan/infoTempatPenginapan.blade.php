<?php $page = 'TempatPenginapanInfo'; ?>
@extends('layouts.homeInfo')
@section('title', 'Maklumat Tempat Penginapan')
@section('content')


    <div class="content-wrapper" style="min-height: 2646.44px;">
        <br>
        <h3 style="text-align: center"><strong>{{ $temPenginapan->NamaTempat }}</strong></h3>
        <div class="container gallery-container center">

            <div class="col-12 col-sm-9">
                <h3 class="d-inline-block d-sm-none"></h3>
                <div class="col-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($temPenginapan['gambar'] as $key => $item)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" >
                                <img src="{{ asset('assets/images/penginapan/' . $item) }}"
                                    class="d-block w-100 " alt="...">
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
        </div>
        <section class="section-content">
        <div class="container">
            <br>
            <div class="row">
                <div class="col-8">
                    <h4><strong>{{ $temPenginapan->NamaTempat }}</strong></h4>
                    <p>Dihoskan oleh {{ $temPenginapan->NamaHos }}</p>
                    <hr>
                    <p>{{ $temPenginapan->penerangan }}</p>
                </div>
                <div class="col-4">
                    <div class="card text-center" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-text">RM {{ $temPenginapan->HargaPerMalam }} / malam</h5>
                            <p class="card-text">{{ $temPenginapan->NamaHos }}</p>
                            <a href="#" class="btn " style="color: black; background-color:#FFB923;">Hubungi
                                Kami</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <h4><strong> Kemudahan di penginapan ini</strong></h4>
            <br>
            <!-- ./col -->

            <div class="row">
                <br>
                <div class="col-3">
                    <!-- small box -->
                    <div class="card text" style="max-width: 15rem; background-color:#E5E5E5;">
                        <div class="card-header">Parking</div>
                        <div class="card-body">
                            <h5 class="card-title">Primary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card text" style="max-width: 15rem; background-color:#FFB338;">
                        <div class="card-header">Wi-Fi</div>
                        <div class="card-body">
                            <h5 class="card-title">Secondary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card text" style="max-width: 15rem; background-color:#E5E5E5;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Success card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card text" style="max-width: 15rem; background-color:#FFB338;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Secondary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <br>

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

            </div><!-- //container -->

        </footer>
    </div>
    <!-- ========================= FOOTER END // ========================= -->
    </body>

    </html>
@endsection

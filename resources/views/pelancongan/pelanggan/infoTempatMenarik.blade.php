<?php $page = 'TempatMenarikInfo'; ?>
@extends('layouts.homeInfo')
@section('title', 'Maklumat Tempat Menarik')
@section('content')

    <div class="content-wrapper" style="min-height: 2646.44px;">

        <!-- ========================= SECTION FEATURE END// ========================= -->
        <!-- ========================= SECTION CONTENT ========================= -->
        <section class="section-content">
            <div class="container">
                <header class="section-heading">
                    <h3 class="section-title">Cameron Highlands</h3>
                </header><!-- sect-heading -->

                <section class="section-intro padding-y-sm">
                    <div class="container">
                        <div class="intro-banner-wrap">
                            <img src="../../../assets/images/attractions/Cameron.jpg" class="img-fluid center"
                                style="height:50%; width:70%;">
                        </div>
                    </div> <!-- container //  -->
                </section>
            </div> <!-- container .//  -->
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

            </div><!-- //container -->
    </div>
    </footer>
    <!-- ========================= FOOTER END // ========================= -->
    </body>

    </html>
@endsection

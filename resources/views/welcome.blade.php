@extends('layouts.mainpage')
@section('title', 'Selamat Datang')
@section('content')
    <div class="content-wrapper">
        <!-- ========================= SECTION INTRO ========================= -->
        <section class="section-intro padding-y-sm">
            <div class="container">
                <div class="intro-banner-wrap">
                    <img src="assets/images/product bg.jpg" class="img-fluid rounded center">
                </div>
            </div> <!-- container //  -->
        </section>
        <!-- ========================= SECTION INTRO END// ========================= -->
        <!-- ========================= SECTION FEATURE ========================= -->
        <section class="section-content padding-y-sm">
            <div class="container">
                <article class="card card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <figure class="item-feature">
                                <span class="text-dark"><i class="fa fa-2x fa-check-circle"></i></span>
                                <figcaption class="pt-3">
                                    <h5 class="title">Produk Asli</h5>
                                <p>Produk tradisional yang dibuat daripada sumber asli</p>
                            </figcaption>
                            </figure> <!-- iconbox // -->
                        </div><!-- col // -->
                        <div class="col-md-4">
                            <figure class="item-feature">
                                <span class="text-dark"><i class="fa fa-2x fa-check-circle"></i></span>
                                <figcaption class="pt-3">
                                    <h5 class="title">Produk Halal</h5>
                                    <p>Semua produk adalah diyakini halal dan bersih untuk dimakan
                                    </p>
                                </figcaption>
                            </figure> <!-- iconbox // -->
                        </div><!-- col // -->
                        <div class="col-md-4">
                            <figure class="item-feature">
                                <span class="text-dark"><i class="fa fa-2x fa-check-circle"></i></span>
                                <figcaption class="pt-3">
                                    <h5 class="title">Produk selamat </h5>
                                    <p>Produk akan selamat seperti baharu ketika sampai di rumah anda 
                                    </p>
                                </figcaption>
                            </figure> <!-- iconbox // -->
                        </div> <!-- col // -->
                    </div>
                </article>
            </div> <!-- container .//  -->
        </section>
        <!-- ========================= SECTION FEATURE END// ========================= -->
        <!-- ========================= SECTION CONTENT ========================= -->
        
        <section class="section-content">
            <div class="container">
                <header class="section-heading">
                    <h3 class="section-title">Produk popular</h3>
                </header><!-- sect-heading -->

                <div class="row">

                    @foreach ($produk as $prod)
                        <div class="col-md-3">
                            <div href="#" class="card card-product-grid">
                                <a href="{{ route('produk.details', $prod->id_produk) }}" class="img-wrap"> <img src="{{ asset('assets/images/produk/' . $prod['GambarProduk'][0]) }}"> </a>
                                <figcaption class="info-wrap">
    
                                    <a type="button" href="{{ route('produk.details', $prod->id_produk) }}" class="title">{{$prod->NamaProduk}}</a>
    
                                    <div class="price mt-1"> RM {{$prod->Harga}}</div> <!-- price-wrap.// -->
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
    </div>
    
@endsection

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
                                <span class="text-warning"><i class="fa fa-2x fa-truck"></i></span>
                                <figcaption class="pt-3">
                                    <h5 class="title">Fast delivery</h5>
                                    <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore </p>
                                </figcaption>
                            </figure> <!-- iconbox // -->
                        </div><!-- col // -->
                        <div class="col-md-4">
                            <figure class="item-feature">
                                <span class="text-warning"><i class="fa fa-2x fa-landmark"></i></span>
                                <figcaption class="pt-3">
                                    <h5 class="title">Creative Strategy</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    </p>
                                </figcaption>
                            </figure> <!-- iconbox // -->
                        </div><!-- col // -->
                        <div class="col-md-4">
                            <figure class="item-feature">
                                <span class="text-warning"><i class="fa fa-2x fa-lock"></i></span>
                                <figcaption class="pt-3">
                                    <h5 class="title">High secured </h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
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
                    <div class="col-md-3">
                        <div href="#" class="card card-product-grid">
                            <a href="#" class="img-wrap"> <img src="assets/images/produk/peria.jpg"> </a>
                            <figcaption class="info-wrap">
                                <a href="#" class="title">Kerepek Peria Wanz Bitez</a>

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
                    <div class="col-md-3">
                        <div href="#" class="card card-product-grid">
                            <a href="#" class="img-wrap"> <img src="assets/images/produk/ubi.jfif"> </a>
                            <figcaption class="info-wrap">
                                <a href="#" class="title">Kerepek Ubi Kari Adrianna Anissa</a>

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
                                <div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
                            </figcaption>
                        </div>
                    </div> <!-- col.// -->
                    <div class="col-md-3">
                        <div href="#" class="card card-product-grid">
                            <a href="#" class="img-wrap"> <img src="assets/images/produk/bwg.webp"> </a>
                            <figcaption class="info-wrap">
                                <a href="#" class="title">Kerepek Bawang SnekTown</a>

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
                                <div class="price mt-1">$56.00</div> <!-- price-wrap.// -->
                            </figcaption>
                        </div>
                    </div> <!-- col.// -->
                    <div class="col-md-3">
                        <div href="#" class="card card-product-grid">
                            <a href="#" class="img-wrap"> <img src="assets/images/produk/pisang.jpg"> </a>
                            <figcaption class="info-wrap">
                                <a href="#" class="title">Kerepek Pisang Rangup</a>

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
                </div> <!-- row.// -->
            </div> <!-- container .//  -->
        </section>
        <!-- ========================= SECTION CONTENT END// ========================= -->
        <!-- ========================= SECTION CONTENT ========================= -->
        <section class="section-content">
            <div class="container">
                <header class="section-heading">
                    <h3 class="section-title">New arrived</h3>
                </header><!-- sect-heading -->
                <div class="row">
                    <div class="col-md-3">
                        <div href="#" class="card card-product-grid">
                            <a href="#" class="img-wrap"> <img src="assets/images/items/5.jpg"> </a>
                            <figcaption class="info-wrap">
                                <a href="#" class="title">Just another product name</a>

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
                    <div class="col-md-3">
                        <div href="#" class="card card-product-grid">
                            <a href="#" class="img-wrap"> <img src="assets/images/items/6.jpg"> </a>
                            <figcaption class="info-wrap">
                                <a href="#" class="title">Some item name here</a>

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
                                <div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
                            </figcaption>
                        </div>
                    </div> <!-- col.// -->
                    <div class="col-md-3">
                        <div href="#" class="card card-product-grid">
                            <a href="#" class="img-wrap"> <img src="assets/images/items/7.jpg"> </a>
                            <figcaption class="info-wrap">
                                <a href="#" class="title">Great product name here</a>

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
                                <div class="price mt-1">$56.00</div> <!-- price-wrap.// -->
                            </figcaption>
                        </div>
                    </div> <!-- col.// -->
                    <div class="col-md-3">
                        <div href="#" class="card card-product-grid">
                            <a href="#" class="img-wrap"> <img src="assets/images/items/9.jpg"> </a>
                            <figcaption class="info-wrap">
                                <a href="#" class="title">Just another product name</a>

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
                </div> <!-- row.// -->
            </div> <!-- container .//  -->
        </section>
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
    </div>
    
@endsection

@extends('layouts.mainpage')
@section('title', 'Beli Belah')
@section('content')

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
                <h3 class="section-title">Produk</h3>
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
    
    
    
   
    
    <!-- ========================= FOOTER ========================= -->
    <footer class="section-footer border-top bg">
        <div class="container">
            <section class="footer-top  padding-y">
                <div class="row">
                    <aside class="col-md col-4">
                        <h6 class="title">Hubungi Kami</h6>
                        <ul class="list-unstyled">
                            <li> <a href="#">Industri Kecil Sederhana Pahang Barat (IKSPB)</a></li>
                            <li> <a href="#">Pahang Barat</a></li>
                            <li> <a href="#">ikspb@iks.my</a></li>
                            <li> <a href="#">+60193883178</a></li>
                        </ul>
                    </aside>
                   
                    <aside class="col-md col-6 ">
                        <h6 class="title">Disediakan oleh</h6>
                        <ul class="list-unstyled">
                            <li> <a href="#">Hanis Batrisyia</a></li>
                            <li> <a href="#">Universiti Kebangsaan Malaysia</a></li>
                            <li> <a href="#">hanisbtrsyia@gmail.com</a></li>
                        </ul>
                    </aside>
                    
                    <aside class="col-md col-6 ">
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
                    <p class="text-muted"> 2022 IKSPB </p>
                </div>
                <div class="col-md-8 text-md-center">
                    <span class="px-2">ikspb@iks.my</span>
                    <span class="px-2">+000-000-0000</span>
                    <span class="px-2">Pahang Barat</span>
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
@endsection

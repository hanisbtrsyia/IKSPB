@extends('layouts.homeTempat')
@section('title', 'Tempat Menarik')
@section('content')

        <!--<h1 style="text-align: center"> Tempat Menarik di Pahang Barat</h1>-->

        
    <!-- ========================= SECTION FEATURE END// ========================= -->
    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content">
        <div class="container">
            <header class="section-heading">
                <h3 class="section-title">Tempat menarik di Pahang Barat</h3>
            </header><!-- sect-heading -->

            <div class="row">
                @foreach ($temMenarik as $temMen)
                    <div class="col-md-3">
                        <div href="#" class="card card-product-grid">
                            <a href="{{ route('TempatMenarik.info', $temMen->id_tempatMenarik) }}"
                                class="img-wrap"> <img src="{{ asset('assets/images/attractions/'.$temMen['gambar'][0])}}" style="width:278px; height:250px;"> </a>
                            <figcaption class="info-wrap">
                                <a type="button" href="{{ route('TempatMenarik.info', $temMen->id_tempatMenarik) }}"
                                    class="title">{{ $temMen->NamaTempat }}</a>
                            </figcaption>
                        </div>
                    </div> <!-- col.// -->
                @endforeach
            </div>
        </div> <!-- col.// -->
        </div> <!-- row.// -->
        </div> <!-- container .//  -->
    </section>
 
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
@endsection

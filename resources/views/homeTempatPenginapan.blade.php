@extends('layouts.homeTempat')
@section('title', 'Tempat Penginapan')
@section('content')
<h1 style="text-align: center"> Tempat Penginapan di Pahang Barat</h1>

        <nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                    aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link pl-0" data-toggle="dropdown" href="#"><strong> <i
                                        class="fa fa-bars"></i> Kategori</strong></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/homeTempatMenarik">Tempat Menarik</a>
                                <a class="dropdown-item" href="/homeTempatPenginapan">Tempat Penginapan</a>
                            </div>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="">Bera</a>
                    
                        </li>
                      
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cameron Highlands</a>
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
    <section class="section-content">
        <div class="container">
            <p></p>
            <div class="row">
                @foreach ($temPenginapan as $temPeng)
                    <div class="col-md-3">
                        <div href="#" class="card card-product-grid">
                            <a href="{{ route('TempatPenginapan.info', $temPeng->id_tempatPenginapan) }}"
                                class="img-wrap"> <img
                                    src="{{ asset('assets/images/penginapan/' . $temPeng['gambar'][0])}}"
                                    style="width:278px; height:250px;"> </a>
                            <figcaption class="info-wrap">
                                <a type="button"
                                    href="{{ route('TempatPenginapan.info', $temPeng->id_tempatPenginapan) }}"
                                    class="title">{{ $temPeng->NamaTempat }}</a>

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
                                <div class="price mt-1">RM 179.00</div> <!-- price-wrap.// -->
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

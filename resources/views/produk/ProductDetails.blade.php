<?php $page = 'ProductDetails'; ?>
@extends('layouts.homepage')
@section('title', 'Maklumat Produk')
@section('content')

    <head>
        <link href="../../assets/css/lightslider.css" rel="stylesheet">
        <script src="../../assets/js/lightslider.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="content-wrapper" style="min-height: 2646.44px;">

            <div class="content-header">

                <div class="card card-solid">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <h3 class="d-inline-block d-sm-none"></h3>
                                <div class="col-12">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            @foreach ($produk['GambarProduk'] as $key => $item)
                                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                    <img src="{{ asset('assets/images/produk/' . $item) }}"
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
                            <div class="col-12 col-sm-6">

                                <h3 class="my-3">{{ $produk->NamaProduk }}</h3>
                                <p>{{ $produk->penerangan }}</p>
                                <hr>

                                <div class="bg-default py-2 px-3 mt-4">
                                    <h2 class="mb-0">
                                        RM {{ $produk->Harga }}
                                    </h2>
                                    <h4 class="mt-0">
                                        <small>Kategori: {{ $produk->NamaKategori }}</small>
                                    </h4>
                                    <h4 class="mt-0">
                                        <small>Berat: {{ $produk->Berat }}</small>
                                    </h4>
                                    <h4 class="mt-0">
                                        <small>Unit: {{ $produk->Unit }}</small>
                                    </h4>
                                </div>
                                <div class="mt-4">

                                    <p class="btn-holder"><a href="{{ route('add.to.cart', $produk->id_produk) }}"
                                            class="btn btn-warning btn-lg btn-flat" role="button"><i
                                                class="fas fa-cart-plus fa-lg mr-2"></i>Add to cart</a></p>

                                </div>
                                <div class="mt-4 product-share">
                                    <a href="#" class="text-gray">
                                        <i class="fab fa-facebook-square fa-2x"></i>
                                    </a>
                                    <a href="#" class="text-gray">
                                        <i class="fab fa-twitter-square fa-2x"></i>
                                    </a>
                                    <a href="#" class="text-gray">
                                        <i class="fas fa-envelope-square fa-2x"></i>
                                    </a>
                                    <a href="#" class="text-gray">
                                        <i class="fas fa-rss-square fa-2x"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <nav class="w-100">
                                <div class="nav nav-tabs" id="product-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab"
                                        href="#product-desc" role="tab" aria-controls="product-desc"
                                        aria-selected="true">Description</a>
                                    <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab"
                                        href="#product-comments" role="tab" aria-controls="product-comments"
                                        aria-selected="false">Comments</a>
                                    <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab"
                                        href="#product-rating" role="tab" aria-controls="product-rating"
                                        aria-selected="false">Rating</a>
                                </div>
                            </nav>
                            <div class="tab-content p-3" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                                    aria-labelledby="product-desc-tab"> Kerepek Bawang - The Raya Mood Lifter

                                    Pada musim raya rumah nenek-nenek gemar menghidangkan ini kepada tetamunya. Ia
                                    seperti senjata rahsia nenek untuk membuat cucu-cucunya tinggal lebih lama. Ahh
                                    saat-saat menenangkan itu.

                                    Kerepek bawang yang baik mesti nipis dengan rangup. Cubalah, pasti membawa mood raya
                                    ke rumah anda. </div>
                                <div class="tab-pane fade" id="product-comments" role="tabpanel"
                                    aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus.
                                    Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et
                                    finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum,
                                    venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna.
                                    Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris
                                    hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl
                                    dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis
                                    dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex
                                    ullamcorper, ornare velit vel, tincidunt ipsum. </div>
                                <div class="tab-pane fade" id="product-rating" role="tabpanel"
                                    aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non,
                                    posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id
                                    fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel
                                    ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod
                                    neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet
                                    feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie
                                    lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at,
                                    consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a.
                                    Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi
                                    orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius
                                    massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>
                            </div>
                        </div>
                    </div>

                </div>

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

                </div><!-- //container -->
            </div>
        
        </footer>
        <!-- ========================= FOOTER END // ========================= -->

    </div>
    </body>

    </html>
@endsection

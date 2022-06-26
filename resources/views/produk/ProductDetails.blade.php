<?php $page = 'ProductDetails'; ?>
@extends('layouts.homepage')
@section('title', 'Maklumat Produk')
@section('content')

    <head>
        <link href="../../assets/css/lightslider.css" rel="stylesheet">
        <script src="../../assets/js/lightslider.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="content-wrapper">

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
                                        <a class="carousel-control-prev" href="#myCarousel" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"> </span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#myCarousel" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 col-sm-6">

                                <h3 class="my-3">{{ $produk->NamaProduk }}</h3>
                                <!--<p>{{ $produk->penerangan }}</p>-->
                                <hr>

                                <div class="bg-default py-2 px-3 mt-4">
                                    <h2 class="mb-0">
                                        RM {{ $produk->Harga }}
                                    </h2>
                                    <br>
                                    <h4 class="mt-0">
                                        <small>Kategori: {{ $produk->NamaKategori }}</small>
                                    </h4>
                                    <h4 class="mt-0">
                                        <small>Berat: {{ $produk->Berat }} g</small>
                                    </h4>
                                    <!--<h4 class="mt-0">
                                        <small>Unit: {{ $produk->Unit }}</small>
                                    </h4>-->
                                </div>
                                <div class="mt-4">
                                    @guest
                                        {{ Log::info(Auth::check()) }}
                                        <p class="btn-holder"><a href="{{ route('login') }}"
                                                class="btn btn-warning btn-lg btn-flat" role="button"><i
                                                    class="fas fa-cart-plus fa-lg mr-2"></i>Add to cart</a></p>
                                    @endguest
                                    @auth
                                        {{ Log::info(Auth::user()) }}
                                        @if (Auth::user()->role == 'pelanggan')
                                            <form action="{{ route('cart.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" value="{{ $produk->id_produk }}" name="id_produk">
                                                <input type="hidden" value="{{ $produk->NamaProduk }}" name="NamaProduk">
                                                <input type="hidden" value="{{ $produk->Harga }}" name="Harga">
                                                <input type="hidden" value="{{ $produk->GambarProduk[0] }}"
                                                    name="GambarProduk">

                                                <input type="hidden" value="1" name="Kuantiti">
                                                <button class="btn btn-warning btn-lg btn-flat" role="button"><i
                                                        class="fas fa-cart-plus fa-lg mr-2"></i>Add To Cart</button>
                                            </form>
                                            <!--<p class="btn-holder"><a href="{{ route('cart.list') }}"
                                                                    class="btn btn-warning btn-lg btn-flat" role="button"><i
                                                                        class="fas fa-cart-plus fa-lg mr-2"></i>Add to cart</a></p>-->
                                        @endif
                                    @endauth
                                </div>
                               
                            </div>
                        </div>
                        <div class="row mt-4">
                            <nav class="w-100">
                                <div class="nav nav-tabs" id="product-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab"
                                        href="#product-desc" role="tab" aria-controls="product-desc"
                                        aria-selected="true">Penerangan</a>
                                    
                                </div>
                            </nav>
                            <div class="tab-content p-3" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                                    aria-labelledby="product-desc-tab"> {{ $produk->penerangan }} </div>
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


                <!-- ========================= SECTION  END// ======================= -->
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

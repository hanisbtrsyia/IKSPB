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
                            <span class="text-warning"><i class="fa fa-2x fa-check-circle"></i></span>
                            <figcaption class="pt-3">
                                <h5 class="title">Produk Asli</h5>
                                <p>Produk tradisional yang dibuat daripada sumber asli</p>
                            </figcaption>
                        </figure> <!-- iconbox // -->
                    </div><!-- col // -->
                    <div class="col-md-4">
                        <figure class="item-feature">
                            <span class="text-warning"><i class="fa fa-2x fa-check-circle"></i></span>
                            <figcaption class="pt-3">
                                <h5 class="title"> Produk Halal</h5>
                                <p>Semua produk adalah diyakini halal dan bersih untuk dimakan
                                </p>
                            </figcaption>
                        </figure> <!-- iconbox // -->
                    </div><!-- col // -->
                    <div class="col-md-4">
                        <figure class="item-feature">
                            <span class="text-warning"><i class="fa fa-2x fa-check-circle"></i></span>
                            <figcaption class="pt-3">
                                <h5 class="title">Produk selamat </h5>
                                <p>Produk seperti baharu ketika sampai di rumah anda 
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

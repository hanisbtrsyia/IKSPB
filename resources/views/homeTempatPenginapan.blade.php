@extends('layouts.homeTempat')
@section('title', 'Tempat Penginapan')
@section('content')
<h1 style="text-align: center"> Tempat Penginapan di Pahang Barat</h1>

        <hr>
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

                                
                                <div class="price mt-1">RM {{ $temPeng->HargaPerMalam }}</div> <!-- price-wrap.// -->
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

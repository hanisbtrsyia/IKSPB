@extends('layouts.homeTempat')
@section('title', 'Tempat Menarik')
@section('content')

<h1 style="text-align: center"> Tempat Menarik di Pahang Barat</h1>
<hr>
        
    <!-- ========================= SECTION FEATURE END// ========================= -->
    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content">
        <div class="container">

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

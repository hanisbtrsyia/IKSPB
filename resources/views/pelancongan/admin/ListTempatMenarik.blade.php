@extends('layouts.master')
@section('title', 'Tempat Menarik')
@section('content')
    
        <div class="content-wrapper">
            <header class="section-header">
                <!-- <nav class="navbar navbar-dark navbar-expand p-0" style="background-color:#FFB923;">
                            <div class="container">
                                <ul class="navbar-nav d-none d-md-flex mr-auto">
                                    <li class="nav-item"><a class="nav-link" href="/" style="color:#000;">Laman
                                            Utama</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/homebelibelah"
                                            style="color:#000;">Beli-Belah</a></li>
                                    <li class="btn-group dropright">
                                        <a href="/homepelancongan" class="btn dropdown-toggle" data-toggle="dropdown"
                                            style="color:#000;"> Pelancongan </a>
                                        <ul class="dropdown-menu dropdown-menu-right" style="max-width: 100px;">
                                            <li><a class="dropdown-item" href="/homeTempatMenarik">Tempat Menarik</a></li>
                                            <li><a class="dropdown-item" href="/homeTempatPenginapan">Tempat Penginapan</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a href="#" class="nav-link" style="color:#000;"> Call:
                                            +0000000000 </a></li>
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color:#000;">
                                            Bahasa Malaysia </a>
                                        <ul class="dropdown-menu dropdown-menu-right" style="max-width: 100px;">
                                            <li><a class="dropdown-item" href="#">English</a></li>
                                            <li><a class="dropdown-item" href="#">Russian </a></li>
                                        </ul>
                                    </li>
                                </ul>

                            </div>
                        </nav>-->
                <!-- header-top-light.// -->
                <br>


                <h1 style="text-align: center"> Tempat Menarik di Pahang Barat</h1>

                
            <hr>
            <!-- ========================= SECTION CONTENT ========================= -->
            <section class="section-content">
                <div class="container">
                    <header class="section-heading">
                        <!--<h3 class="section-title">Tempat popular</h3>-->
                    </header><!-- sect-heading -->

                    <div class="row">
                        @foreach ($temMenarik as $temMen)
                            <div class="col-md-3">
                                <div href="#" class="card card-product-grid">
                                    <a href="{{ route('TempatMenarik.edit', $temMen->id_tempatMenarik) }}"
                                        class="img-wrap"> <img
                                            src="{{ asset('assets/images/attractions/' . $temMen['gambar'][0]) }}"
                                            style="width:264px; height:200px;"> </a><hr>
                                    <figcaption class="info-wrap" style="text-align: center;">
                                        <a type="button" href="{{ route('TempatMenarik.edit', $temMen->id_tempatMenarik) }}"
                                            class="title" style="color: black; ">{{ $temMen->NamaTempat }}</a>
                                    </figcaption>
                                    
                                    <br>
                                </div>
                            </div> <!-- col.// -->
                        @endforeach
                    </div> <!-- row.// -->
                </div> <!-- container .//  -->
            </section>
            <!-- ========================= SECTION CONTENT END// ========================= -->


        </div>
 

@endsection

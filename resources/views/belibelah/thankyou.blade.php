@extends('layouts.homepage')
@section('title', 'Troli')
@section('content')

    <body>
        <div class="content-wrapper">
            <section class="h-70" style="background-color: #ffffff;">
                <div class=" container py-3 h-60">
                    <div class="row d-flex justify-content-center align-items-center h-80">
                        <div class="col-lg-5 col-xl-6">
                            <div class="card border-top border-bottom border-3" style="border-color: #f37a27 !important;">
                                <div class="card-body p-5">

                                    <h4 class="lead fw-bold mb-5 text-center" style="color: #f37a27;">IKSPB
                                    </h4>

                                    <div class="row">
                                        <div class="jumbotron text-center">
                                            <div class="col mb-3">
                                                <p class="small text-muted mb-1">#Order</p>
                                                <p>{{ $thanku->id_order }}</p>
                                                <p class="small text-muted mb-1">Tarikh: {{ $thanku->created_at }}</p>
                                            </div>
                                            
                                            <h1 class="display-3">Terima Kasih!</h1>
                                            <p class="lead"><strong></strong> Terima kasih atas pesanan anda, {{ $thanku->NamaPelanggan }}. Kami berharap dapat menjalankan perniagaan dengan anda lagi.</p>
                                            <hr>
                                            <p>
                                                Menghadapi masalah? <a href="">Hubungi Kami</a>
                                            </p>
                                            <p class="lead">
                                                <a class="btn btn-warning btn-sm" href="{{ url('/homebelibelah') }}"
                                                    role="button">Kembali ke laman utama</a>
                                            </p>                                   
                                        </div>
                                    </div>

                                    <!--<div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                        <div class="row">
                          <div class="col-md-8 col-lg-9">
                            <p>Terima kasih kerana memilih perkhidmatan kami. Kami adalah berasaskan barangan tradisional yang asli dari Pahang Barat.</p>
                          </div>
                          <div class="col-md-4 col-lg-3">
                            <p>RM </p>
                          </div>
                        </div>
                        
                      </div>-->

                                    <!--<p class="lead fw-bold mb-4 pb-2" style="color: #f37a27;">Tracking Order</p>-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
@endsection

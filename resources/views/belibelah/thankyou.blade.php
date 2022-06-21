@extends('layouts.homepage')
@section('title', 'Troli')
@section('content')

<section class="h-100 h-custom" style="background-color: #ffffff;">
    <div class=" container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
          <div class="card border-top border-bottom border-3" style="border-color: #f37a27 !important;">
            <div class="card-body p-5">
  
              <p class="lead fw-bold mb-5" style="color: #f37a27;">Terima kasih kerana membeli dengan kami, {{ $thanku->NamaPelanggan }}</p>
         
              <div class="row">
             
                <div class="col mb-3">
                  <p class="small text-muted mb-1">Tarikh</p>
                  <p>{{ $thanku->created_at }}</p>
                </div>
                
                <div class="col mb-3">
                  <p class="small text-muted mb-1">Order No.</p>
                  <p>{{ $thanku->id_order }}</p>
                </div>

                <div class="col mb-3">
                  <p class="small text-muted mb-1">Alamat Penghantaran</p>
                  <p>{{ $thanku->Address }}, {{ $thanku->Postcode }} {{ $thanku->City }}, {{ $thanku->District }} {{ $thanku->State }}</p>
                </div>
              </div>
             
              <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                <div class="row">
                  <div class="col-md-8 col-lg-9">
                    <p>Terima kasih kerana memilih perkhidmatan kami. Kami adalah berasaskan barangan tradisional yang asli dari Pahang Barat.</p>
                  </div>
                  <div class="col-md-4 col-lg-3">
                    <p>RM {{ $thanku->subtotal }}</p>
                  </div>
                </div>
                
              </div>
  
              <div class="row my-4">
                <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                  <p class="lead fw-bold mb-0" style="color: #f37a27;">RM {{ $thanku->subtotal }}</p>
                </div>
              </div>
             
              <!--<p class="lead fw-bold mb-4 pb-2" style="color: #f37a27;">Tracking Order</p>-->
  
              <div class="row">
                <div class="col-lg-12">
  
                  <div class="horizontal-timeline">
  
                    
  
                  </div>
  
                </div>
              </div>
  
              <p class="mt-4 pt-2 mb-0">Want any help? <a href="#!" style="color: #f37a27;">Please contact
                  us</a></p>
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
<?php $page = 'TempatPenginapanInfo'; ?>
@extends('layouts.homeInfo')
@section('title', 'Maklumat Tempat Penginapan')
@section('content')

    <div class="content-wrapper" style="min-height: 2646.44px;">
        <br>
        <h3 style="text-align: center"><strong>{{ $temPenginapan->NamaTempat }}</strong></h3>
        <div class="container gallery-container">

            <div id="carouselExampleIndicators" class="carousel slide"  style="height:50%; width:70%;  margin: auto;" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
               
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../../../assets/images/infopenginapan/2.webp" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../../../assets/images/infopenginapan/1.webp" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../../../assets/images/infopenginapan/3.webp" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <br>
        <div style="text-align: center" class="row">
            <div class="col-8">
                <h5><strong>{{ $temPenginapan->NamaTempat }}</strong></h5>
                <h6>{{ $temPenginapan->penerangan }}</h6>
            </div>
            <div class="col-4">
                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                        <h5 class="card-title">Hubungi Kami</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $temPenginapan->NoTel }}</h6>
                        <p class="card-text">{{ $temPenginapan->NamaHos }}</p>
                        <button type="button" class="btn btn-block btn-warning">Warning</button>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="row">
            <div class="col-md-12">
                <h4><strong> Kemudahan di penginapan ini</strong></h4>
                <!-- ./col -->
                <div class="col-md-3">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <input type="hidden" id="id" value="1" class="form-control">
                            <input type="hidden" id="id" value="2" class="form-control">
                            <input type="hidden" id="id" value="3" class="form-control">
                            <h3>3<sup style="font-size: 20px"></sup></h3>
                            <input type="hidden" id="id" value="0" class="form-control">
                            <p>Wi-Fi</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>



                <!-- /.card -->
                <!-- ./col -->

                <div class="col-md-3">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <input type="hidden" id="id" value="1" class="form-control">
                            <h3>1<sup style="font-size: 20px"></sup></h3>
                            <input type="hidden" id="id" value="0" class="form-control">
                            <p>Sarapan Pagi</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- ./col -->

                <div class="col-md-3">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <input type="hidden" id="id" value="1" class="form-control">

                            <h3>1<sup style="font-size: 20px"></sup></h3>
                            <input type="hidden" id="id" value="0" class="form-control">
                            <p>Basikal</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-md-3">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <input type="hidden" id="id" value="1" class="form-control">

                            <h3>1<sup style="font-size: 20px"></sup></h3>
                            <input type="hidden" id="id" value="0" class="form-control">
                            <p>Tempat Letak Kenderaan</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
        <script>
            baguetteBox.run('.tz-gallery');
        </script>
        <div role="dialog" id="baguetteBox-overlay">
            <div id="baguetteBox-slider"></div><button type="button" id="previous-button" aria-label="Previous"
                class="baguetteBox-button"><svg width="44" height="60">
                    <polyline points="30 10 10 30 30 50" stroke="rgba(255,255,255,0.5)" stroke-width="4"
                        stroke-linecap="butt" fill="none" stroke-linejoin="round"></polyline>
                </svg></button><button type="button" id="next-button" aria-label="Next" class="baguetteBox-button"><svg
                    width="44" height="60">
                    <polyline points="14 10 34 30 14 50" stroke="rgba(255,255,255,0.5)" stroke-width="4"
                        stroke-linecap="butt" fill="none" stroke-linejoin="round"></polyline>
                </svg></button><button type="button" id="close-button" aria-label="Close" class="baguetteBox-button"><svg
                    width="30" height="30">
                    <g stroke="rgb(160,160,160)" stroke-width="4">
                        <line x1="5" y1="5" x2="25" y2="25"></line>
                        <line x1="5" y1="25" x2="25" y2="5"></line>
                    </g>
                </svg></button>
        </div>

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
    </body>

    </html>
@endsection

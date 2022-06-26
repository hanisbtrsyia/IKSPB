<?php $page = 'TempatPenginapanInfo'; ?>
@extends('layouts.homeInfo')
@section('title', 'Maklumat Tempat Penginapan')
@section('content')

    <h1 style="text-align: center">Tempat Menginap di Pahang Barat</h1>
    <hr>
   
        <section class="section-content">
            <div class="container ">
                <br>
                <h4 style="text-align: center"><strong>{{ $temPenginapan->NamaTempat }}</strong></h4>
                <section class="section-intro padding-y-sm">
                    <div class="container ">

                        <div class="col-12 offset-md-3">
                            <div class="d-flex justify-content-center w-50 h-50">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        @foreach ($temPenginapan['gambar'] as $key => $item)
                                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                <img src="{{ asset('assets/images/penginapan/' . $item) }}"
                                                    class="d-block w-100 " alt="...">
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
                    </div>
                    <br>

                    <section class="section-content">
                        <div class="container">
                            <div class="card">
                                <div class="card-body">
                                    <br>
                                    <div class="row">
                                        <div class="col-8">
                                            <h4><strong>{{ $temPenginapan->NamaTempat }}</strong></h4>
                                            <p>Dihoskan oleh {{ $temPenginapan->NamaHos }}</p>
                                            <hr>
                                            <p>{{ $temPenginapan->penerangan }}</p>
                                        </div>
                                        <div class="col-4">
                                            <div class="card text-center" style="width: 18rem;">
                                                <div class="card-body">
                                                    <h5 class="card-text">RM {{ $temPenginapan->HargaPerMalam }} / malam
                                                    </h5>
                                                    <p class="card-text">{{ $temPenginapan->NamaHos }}</p>

                                                    <a href="" class="btn "
                                                        style="color: black; background-color:#FFB923;">Hubungi
                                                        Kami: {{ $temPenginapan->NoTel }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <h4><strong> Kemudahan di penginapan ini</strong></h4>
                                    <hr>
                                    <!-- ./col -->

                                    <div class="row">
                                        <br>
                                        @if (in_array('Tiada', $temPenginapan->Kemudahan))
                                            <div class="col-3">
                                                <!-- small box -->
                                                <div class="card text" style="max-width: 15rem; background-color:#eeeeee;">
                                                    <div class="card-body">

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                            height="35" viewBox="0 0 640 512">
                                                            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                                            <path
                                                                d="M176 256c44.11 0 80-35.89 80-80s-35.89-80-80-80-80 35.89-80 80 35.89 80 80 80zm352-128H304c-8.84 0-16 7.16-16 16v144H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v352c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-48h512v48c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V240c0-61.86-50.14-112-112-112z" />
                                                        </svg>
                                                    </div>
                                                    <div class="card-body" style="min-height: 165px;">
                                                        <h5 class="card-title">Keselesaan</h5>
                                                        <p class="card-text">Kami menyediakan tempat penginapan yang selesa
                                                            untuk semua.</p>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        @endif

                                        @if (in_array('Wi-Fi', $temPenginapan->Kemudahan))
                                            <div class="col-3">
                                                <!-- small box -->
                                                <div class="card text" style="max-width: 15rem; background-color:#eeeeee;">
                                                    <div class="card-body">
                                                        <i class="bi bi-wifi"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                            height="35" fill="currentColor" class="bi bi-wifi"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.444 12.444 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049z" />
                                                            <path
                                                                d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.455 9.455 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.473 6.473 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091l.016-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z" />
                                                        </svg>
                                                    </div>
                                                    <div class="card-body" style="min-height: 165px;">
                                                        <h5 class="card-title">Wi-Fi</h5>
                                                        <p class="card-text">Kawasan yang lebih luas di sekelilingnya
                                                            diliputi oleh rangkaian Wi-Fi secara percuma.</p>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        @endif

                                        @if (in_array('Tempat Letak Kenderaan', $temPenginapan->Kemudahan))
                                            <div class="col-3">
                                                <div class="card text" style="max-width: 15rem; background-color:#eeeeee;">
                                                    <div class="card-body">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="34"
                                                            height="34" viewBox="0 0 512 512">
                                                            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                                            <path
                                                                d="M499.99 176h-59.87l-16.64-41.6C406.38 91.63 365.57 64 319.5 64h-127c-46.06 0-86.88 27.63-103.99 70.4L71.87 176H12.01C4.2 176-1.53 183.34.37 190.91l6 24C7.7 220.25 12.5 224 18.01 224h20.07C24.65 235.73 16 252.78 16 272v48c0 16.12 6.16 30.67 16 41.93V416c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h256v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-54.07c9.84-11.25 16-25.8 16-41.93v-48c0-19.22-8.65-36.27-22.07-48H494c5.51 0 10.31-3.75 11.64-9.09l6-24c1.89-7.57-3.84-14.91-11.65-14.91zm-352.06-17.83c7.29-18.22 24.94-30.17 44.57-30.17h127c19.63 0 37.28 11.95 44.57 30.17L384 208H128l19.93-49.83zM96 319.8c-19.2 0-32-12.76-32-31.9S76.8 256 96 256s48 28.71 48 47.85-28.8 15.95-48 15.95zm320 0c-19.2 0-48 3.19-48-15.95S396.8 256 416 256s32 12.76 32 31.9-12.8 31.9-32 31.9z" />
                                                        </svg>
                                                    </div>
                                                    <div class="card-body" style="min-height: 165px;">
                                                        <h5 class="card-title">Tempat Letak Kenderaan</h5>
                                                        <p class="card-text">Tempat letak kereta berdekatan tempat
                                                            penginapan untuk tetamu.</p>
                                                    </div>

                                                </div>
                                                <br>
                                            </div>
                                        @endif
                                        <br>
                                        @if (in_array('TV', $temPenginapan->Kemudahan))
                                            <div class="col-3">
                                                <div class="card text" style="max-width: 15rem; background-color:#eeeeee; ">
                                                    <div class="card-body">
                                                        <i class="bi bi-tv"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                            height="35" fill="currentColor" class="bi bi-tv"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM13.991 3l.024.001a1.46 1.46 0 0 1 .538.143.757.757 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.464 1.464 0 0 1-.143.538.758.758 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.464 1.464 0 0 1-.538-.143.758.758 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.46 1.46 0 0 1 .143-.538.758.758 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3h11.991zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z" />
                                                        </svg>
                                                    </div>
                                                    <div class="card-body" style="min-height: 165px;">
                                                        <h5 class="card-title">TV</h5>
                                                        <p class="card-text">TV dengan kabel standard akan menemani anda
                                                            dengan pelbagai siaran menarik.</p>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        @endif
                                        <br>
                                        @if (in_array('Pengering Rambut', $temPenginapan->Kemudahan))
                                            <div class="col-3">
                                                <div class="card text"
                                                    style="max-width: 15rem; background-color:#eeeeee;">
                                                    <div class="card-body">
                                                        <i class="bi bi-wind"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                            height="35" fill="currentColor" class="bi bi-wind"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M12.5 2A2.5 2.5 0 0 0 10 4.5a.5.5 0 0 1-1 0A3.5 3.5 0 1 1 12.5 8H.5a.5.5 0 0 1 0-1h12a2.5 2.5 0 0 0 0-5zm-7 1a1 1 0 0 0-1 1 .5.5 0 0 1-1 0 2 2 0 1 1 2 2h-5a.5.5 0 0 1 0-1h5a1 1 0 0 0 0-2zM0 9.5A.5.5 0 0 1 .5 9h10.042a3 3 0 1 1-3 3 .5.5 0 0 1 1 0 2 2 0 1 0 2-2H.5a.5.5 0 0 1-.5-.5z" />
                                                        </svg>
                                                    </div>
                                                    <div class="card-body" style="min-height: 165px;">
                                                        <h5 class="card-title">Pengering Rambut</h5>
                                                        <p class="card-text">Disediakan pengering rambut untuk membantu
                                                            anda mengeringkan rambut dalam masa yang singkat. </p>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        @endif
                                        <br>
                                        @if (in_array('Seterika', $temPenginapan->Kemudahan))
                                            <div class="col-3">
                                                <div class="card text"
                                                    style="max-width: 15rem; background-color:#eeeeee;">
                                                    <div class="card-body">
                                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                            role="img" width="35" height="35"
                                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 472">
                                                            <path fill="currentColor"
                                                                d="M235 216h106q10 0 16-6t6-15q0-22-22-22H235q-97 0-166 68.5T0 408q0 21 21 21h470q10 0 17-8q4-4 4-19L427 94q-11-40-45.5-65.5T305 3H192q-21 0-21 21t21 21h113q28 0 50.5 17.5T386 107l77 280H45q8-72 62.5-121.5T235 216z" />
                                                        </svg>
                                                    </div>
                                                    <div class="card-body" style="min-height: 165px;">
                                                        <h5 class="card-title">Seterika</h5>
                                                        <p class="card-text">Tidak perlu membawa seterika dari rumah kerana
                                                            ada disediakan di sini.</p>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        @endif
                                        <br>
                                        @if (in_array('Dapur', $temPenginapan->Kemudahan))
                                            <div class="col-3">
                                                <div class="card text"
                                                    style="max-width: 15rem; background-color:#eeeeee;">
                                                    <div class="card-body">
                                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                            role="img" width="35" height="35"
                                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M6.4 7c-.34.55-.4.97-.4 1.38C6 9.15 7 11 7 12c0 .95-.4 1.5-.4 1.5H5.1s.4-.55.4-1.5c0-1-1-2.85-1-3.62c0-.41.06-.83.4-1.38h1.5zm5 0c-.34.55-.4.97-.4 1.38c0 .77 1 2.62 1 3.62c0 .95-.4 1.5-.4 1.5h1.5s.4-.55.4-1.5c0-1-1-2.85-1-3.62c0-.41.06-.83.4-1.38h-1.5zM8.15 7c-.34.55-.4.97-.4 1.38c0 .77 1 2.63 1 3.62c0 .95-.4 1.5-.4 1.5h1.5s.4-.55.4-1.5c0-1-1-2.85-1-3.62c0-.41.06-.83.4-1.38h-1.5zM18.6 2c-1.54 0-2.81 1.16-2.98 2.65L14.53 15H4.01c-.6 0-1.09.53-1 1.13C3.53 19.46 6.39 22 9.75 22c3.48 0 6.34-2.73 6.71-6.23L17.61 4.9c.05-.51.47-.9.99-.9c.55 0 1 .45 1 1c0 .3-.1 1.25-.1 1.25l1.97.25s.13-1.06.13-1.5c0-1.65-1.35-3-3-3zM9.75 20c-1.94 0-3.67-1.23-4.43-3h8.79c-.72 1.78-2.42 3-4.36 3z" />
                                                        </svg>
                                                    </div>
                                                    <div class="card-body" style="min-height: 165px;">
                                                        <h5 class="card-title">Dapur</h5>
                                                        <p class="card-text">Dapur dan alatan memasak untuk memudahkan anda
                                                            memasak.</p>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        @endif
                                        <br>
                                        @if (in_array('Peti Sejuk', $temPenginapan->Kemudahan))
                                            <div class="col-3">
                                                <div class="card text"
                                                    style="max-width: 15rem; background-color:#eeeeee;">
                                                    <div class="card-body">

                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                            id="Capa_1" x="0px" y="0px" width="35"
                                                            height="35" viewBox="0 0 473.578 473.578"
                                                            style="enable-background:new 0 0 473.578 473.578;"
                                                            xml:space="preserve">
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="M139.551,106.758c11.802,0,21.404-9.604,21.404-21.41c0-11.805-9.602-21.41-21.404-21.41    c-11.809,0-21.416,9.604-21.416,21.41C118.135,97.154,127.742,106.758,139.551,106.758z M139.551,75.939    c5.185,0,9.404,4.221,9.404,9.41s-4.219,9.41-9.404,9.41c-5.192,0-9.416-4.221-9.416-9.41S134.359,75.939,139.551,75.939z" />
                                                                    <path
                                                                        d="M139.545,165.085c-12.998,0-23.179,7.745-23.179,17.631v122.89c0,9.888,10.181,17.631,23.179,17.631    c12.999,0,23.181-7.744,23.181-17.631v-122.89C162.726,172.83,152.544,165.085,139.545,165.085z M150.726,305.605    c0,2.242-4.459,5.631-11.181,5.631c-6.72,0-11.179-3.389-11.179-5.631v-122.89c0-2.242,4.458-5.631,11.179-5.631    c6.722,0,11.181,3.39,11.181,5.631V305.605z" />
                                                                    <path
                                                                        d="M369.644,0H103.932C83.452,0,66.79,16.662,66.79,37.142V402.9c0,20.48,16.662,37.141,37.142,37.141h4.572    c-1.729,3.209-2.713,6.877-2.713,10.77c0,12.555,10.213,22.768,22.766,22.768c12.551,0,22.761-10.213,22.761-22.768    c0-3.893-0.983-7.561-2.713-10.77H324.97c-1.729,3.209-2.713,6.877-2.713,10.77c0,12.555,10.213,22.768,22.766,22.768    c12.549,0,22.758-10.213,22.758-22.768c0-3.893-0.982-7.561-2.711-10.77h4.576c20.48,0,37.143-16.66,37.143-37.141V37.142    C406.786,16.661,390.126,0,369.644,0z M103.932,12h265.711c13.863,0,25.143,11.279,25.143,25.142v99.791H78.79V37.142    C78.79,23.278,90.069,12,103.932,12z M139.318,450.811c0,5.938-4.828,10.768-10.761,10.768c-5.937,0-10.766-4.83-10.766-10.768    s4.83-10.77,10.766-10.77C134.49,440.041,139.318,444.873,139.318,450.811z M355.782,450.811c0,5.938-4.826,10.768-10.76,10.768    c-5.936,0-10.766-4.83-10.766-10.768s4.83-10.77,10.766-10.77C350.956,440.041,355.782,444.873,355.782,450.811z M369.644,428.041    H103.932c-13.863,0-25.142-11.277-25.142-25.141V148.932h315.998v253.966C394.786,416.764,383.509,428.041,369.644,428.041z" />
                                                                </g>
                                                            </g>

                                                        </svg>

                                                    </div>
                                                    <div class="card-body" style="min-height: 165px;">
                                                        <h5 class="card-title">Peti Sejuk</h5>
                                                        <p class="card-text">Segala makanan yang perlu disimpan lama boleh
                                                            disimpan di dalam peti sejuk yang disediakan.</p>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        @endif
                                        <br>
                                        @if (in_array('Balkoni', $temPenginapan->Kemudahan))
                                            <div class="col-3">
                                                <div class="card text"
                                                    style="max-width: 15rem; background-color:#eeeeee;">
                                                    <div class="card-body">
                                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                            role="img" width="35" height="35"
                                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M10 10v2H8v-2h2zm6 2v-2h-2v2h2zm5 2v8H3v-8h1v-4c0-4.42 3.58-8 8-8s8 3.58 8 8v4h1zM7 16H5v4h2v-4zm4 0H9v4h2v-4zm0-11.92C8.16 4.56 6 7.03 6 10v4h5V4.08zM13 14h5v-4c0-2.97-2.16-5.44-5-5.92V14zm2 2h-2v4h2v-4zm4 0h-2v4h2v-4z" />
                                                        </svg>
                                                    </div>
                                                    <div class="card-body" style="min-height: 165px;">
                                                        <h5 class="card-title">Balkoni</h5>
                                                        <p class="card-text">Terdapat balkoni untuk anda melihat
                                                            pemandangan luar.</p>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        @endif
                                        @if (in_array('Penghawa Dingin', $temPenginapan->Kemudahan))
                                            <div class="col-3">
                                                <div class="card text"
                                                    style="max-width: 15rem; background-color:#eeeeee;">
                                                    <div class="card-body">
                                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                            role="img" width="35" height="35"
                                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                                            <g fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="4">
                                                                <rect width="40" height="20" x="4"
                                                                    y="8" rx="2" />
                                                                <path d="M12 20h24v8H12zm20-6h4M24 34v6m-8-4v2m16-2v2" />
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="card-body" style="min-height: 120px;">
                                                        <h5 class="card-title">Penghawa Dingin</h5>
                                                        <p class="card-text">Penghawa dingin disediakan bagi memastikan
                                                            anda tidak akan berasa panas.</p>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        @endif
                                        <br>
                                        @if (in_array('Pemanas Air', $temPenginapan->Kemudahan))
                                            <div class="col-3">
                                                <div class="card text"
                                                    style="max-width: 15rem; background-color:#eeeeee;">
                                                    <div class="card-body">
                                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                            role="img" width="35" height="35"
                                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512">
                                                            <path fill="currentColor"
                                                                d="M400 192H32c-17.75 0-32 14.3-32 32v192c0 53 43 96 96 96h192c53 0 96-43 96-96h16c61.75 0 112-50.25 112-112s-50.2-112-112-112zm0 160h-16v-96h16c26.5 0 48 21.5 48 48s-21.5 48-48 48zM107.9 100.7c12.4 6.4 20.1 20.7 20.1 35.3c0 13.25 10.75 23.89 24 23.89s24-11.79 24-24.19c0-31.34-16.83-60.64-43.91-76.45C119.7 52.03 112 38.63 112 24.28C112 11.03 101.25.14 88 .14S64 11.03 64 24.28c0 31.35 16.83 60.64 43.9 76.42zm112 0c12.4 6.4 20.1 20.7 20.1 35.3c0 13.25 10.75 23.86 24 23.86s24-11.76 24-24.16c0-31.34-16.83-60.64-43.91-76.45C231.7 52.03 224 38.63 224 24.28C224 11.03 213.25.1 200 .1s-24 10.93-24 24.18c0 31.35 16.8 60.64 43.9 76.42z" />
                                                        </svg>
                                                    </div>
                                                    <div class="card-body" style="min-height: 164px;">
                                                        <h5 class="card-title">Pemanas Air</h5>
                                                        <p class="card-text">Pemanas air untuk kegunaan pelanggan.</p>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        @endif
                                        <br>
                                        @if (in_array('Mesin Basuh', $temPenginapan->Kemudahan))
                                            <div class="col-3">
                                                <div class="card text"
                                                    style="max-width: 15rem; background-color:#eeeeee;">
                                                    <div class="card-body">
                                                        <i class="bi bi-speaker"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                            height="35" fill="currentColor" class="bi bi-speaker"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z" />
                                                            <path
                                                                d="M8 4.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5zM8 6a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 3a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-3.5 1.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                        </svg>
                                                    </div>
                                                    <div class="card-body" style="min-height: 164px;">
                                                        <h5 class="card-title">Mesin Basuh</h5>
                                                        <p class="card-text">Menyediakan mesin basuh untuk memudahkan
                                                            pelanggan.</p>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        @endif
                                        <br>
                                        @if (in_array('Mesin Pengering', $temPenginapan->Kemudahan))
                                            <div class="col-3">
                                                <div class="card text"
                                                    style="max-width: 15rem; background-color:#eeeeee;">
                                                    <div class="card-body">
                                                        <i class="bi bi-snow"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                            height="35" fill="currentColor" class="bi bi-snow"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 16a.5.5 0 0 1-.5-.5v-1.293l-.646.647a.5.5 0 0 1-.707-.708L7.5 12.793V8.866l-3.4 1.963-.496 1.85a.5.5 0 1 1-.966-.26l.237-.882-1.12.646a.5.5 0 0 1-.5-.866l1.12-.646-.884-.237a.5.5 0 1 1 .26-.966l1.848.495L7 8 3.6 6.037l-1.85.495a.5.5 0 0 1-.258-.966l.883-.237-1.12-.646a.5.5 0 1 1 .5-.866l1.12.646-.237-.883a.5.5 0 1 1 .966-.258l.495 1.849L7.5 7.134V3.207L6.147 1.854a.5.5 0 1 1 .707-.708l.646.647V.5a.5.5 0 1 1 1 0v1.293l.647-.647a.5.5 0 1 1 .707.708L8.5 3.207v3.927l3.4-1.963.496-1.85a.5.5 0 1 1 .966.26l-.236.882 1.12-.646a.5.5 0 0 1 .5.866l-1.12.646.883.237a.5.5 0 1 1-.26.966l-1.848-.495L9 8l3.4 1.963 1.849-.495a.5.5 0 0 1 .259.966l-.883.237 1.12.646a.5.5 0 0 1-.5.866l-1.12-.646.236.883a.5.5 0 1 1-.966.258l-.495-1.849-3.4-1.963v3.927l1.353 1.353a.5.5 0 0 1-.707.708l-.647-.647V15.5a.5.5 0 0 1-.5.5z" />
                                                        </svg>
                                                    </div>
                                                    <div class="card-body" style="min-height: 164px;">
                                                        <h5 class="card-title">Mesin Pengering</h5>
                                                        <p class="card-text">Mesin pengering ada disediakan bagi kegunaan
                                                            pelanggan.</p>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <br>

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
                
                @endsection
                </section>
            </div>
        </section>
    </div>

    

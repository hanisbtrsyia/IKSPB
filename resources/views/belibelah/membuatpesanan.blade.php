@extends('layouts.homepage')
@section('title', 'Troli')
@section('content')
    @php
    sprintf('%06d', mt_rand(100000, 999999));
    @endphp

    <body>
        <form action="{{ route('cart.makeorder') }}" method="post" enctype="multipart/form-data">
            @csrf
            <fieldset>
                @if ($message = Session::get('success'))
                    <div class="p-4 mb-3 bg-green-400 rounded">
                        <p class="text-green-800">{{ $message }}</p>
                    </div>
                @endif
                <div class="content-wrapper">
                    <div class="content-header">
                        <section class="h-100 gradient-custom" style="background-color: #eee;">
                            <div class="container py-5 h-100">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                    <div class="col-lg-5 col-xl-6">
                                        <div class="card border-top border-bottom border-3"
                                            style="border-color: #000000 !important;">
                                            <div class="card-header px-2 py-3">
                                                <h5 class="text mb-0">&nbsp Terima kasih kerana membuat pesanan dengan
                                                    kami!</h5>
                                            </div>
                                            <div class="card-body p-4">
                                                <div class="d-flex justify-content-between align-items-center mb-4">
                                                    <p class="lead fw-normal mb-0" style="color: #f37a27;">Ringkasan Pesanan
                                                    </p>
                                                    <p class="small text mb-0">Order ID : @php echo sprintf("%06d",mt_rand(100000,999999)); @endphp</p>
                                                </div>
                                                @foreach ($orderItems as $item)
                                                <div class="card shadow-0 border mb-4">
                                                    <div class="card-body">
                                                        <div class="row">
                                                           
                                                                <div class="col-md-2">
                                                                    <img src="{{ asset('assets/images/produk/' . $item->attributes->image) }}"
                                                                        class="img-fluid" alt="Phone">
                                                                </div>
                                                                <div
                                                                    class="col-md-6 text-center d-flex justify-content-center align-items-center">
                                                                    <p class="text mb-0">{{ $item->name }}</p>
                                                                </div>
                                                                <div
                                                                    class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                                    <p class="text mb-0 small">Kuantiti:
                                                                        {{ $item->quantity }}</p>
                                                                </div>
                                                                <div
                                                                    class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                                    <p class="text mb-0 small">RM {{ $item->price }}
                                                                    </p>
                                                                </div>
                                                            
                                                        </div>

                                                    </div>
                                                </div>
                                                @endforeach
                                                <hr>
                                                <p class="lead fw-normal mb-0" style="color: #000000;">Maklumat Perhubungan
                                                </p><br>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <input type="hidden" name="id_order" id="id_order"
                                                            value="@php echo sprintf("%06d",mt_rand(100000,999999));
                                                            @endphp" class="form-control" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="hidden" name="id_pelanggan" id="id_pelanggan"
                                                            class="form-control" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="hidden" name="subtotal" id="subtotal"
                                                            value="{{ Cart::getTotal() }}" class="form-control"
                                                            placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" name="Emel" id="Emel"
                                                                class="form-control" placeholder="E-mel">
                                                                <span class="text-danger">
                                                                    @error('Emel')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" name="NamaPelanggan" id="NamaPelanggan"
                                                                class="form-control" placeholder="Nama">
                                                                <span class="text-danger">
                                                                    @error('NamaPelanggan')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" name="NoTel" id="NoTel"
                                                                class="form-control" placeholder="No Telefon">
                                                                <span class="text-danger">
                                                                    @error('NoTel')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="lead fw-normal mb-0" style="color: #000000;">Alamat Penghantaran
                                                </p><br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" name="Address" id="Address" class="form-control"
                                                                placeholder="Alamat">
                                                                <span class="text-danger">
                                                                    @error('Address')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" name="Postcode" id="Postcode"
                                                                class="form-control" placeholder="Poskod/Zip">
                                                                <span class="text-danger">
                                                                    @error('Postcode')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" name="City" id="City" class="form-control"
                                                                placeholder="Bandar">
                                                                <span class="text-danger">
                                                                    @error('City')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="summary-delivery">
                                                            <select class="form-select" name="District" id="District"
                                                                aria-label="Default select example">
                                                                <option value="0" selected="selected">Daerah</option>
                                                                <option value="Johor Bahru">Johor Bahru</option>
                                                                <option value="Batu Pahat">Batu Pahat</option>
                                                                <option value="Kluang">Kluang</option>
                                                                <option value="Kulai">Kulai</option>
                                                                <option value="Muar">Muar</option>
                                                                <option value="Kota Tinggi">Kota Tinggi</option>
                                                                <option value="Segamat">Segamat</option>
                                                                <option value="Pontian">Pontian</option>
                                                                <option value="Tangkak">Tangkak</option>
                                                                <option value="Mersing">Mersing</option>
                                                                <option value="Sungai Petani">Sungai Petani</option>
                                                                <option value="Alor Setar">Alor Setar</option>
                                                                <option value="Kulim">Kulim</option>
                                                                <option value="Kubang Pasu">Kubang Pasu</option>
                                                                <option value="Baling">Baling</option>
                                                                <option value="Pendang">Pendang</option>
                                                                <option value="Langkawi">Langkawi</option>
                                                                <option value="Yan">Yan</option>
                                                                <option value="Sik">Sik</option>
                                                                <option value="Padang Terap">Padang Terap</option>
                                                                <option value="Pokok Sena">Pokok Sena</option>
                                                                <option value="Bandar Baharu">Bandar Baharu</option>
                                                                <option value="Kota Bharu">Kota Bharu</option>
                                                                <option value="Pasir Mas">Pasir Mas</option>
                                                                <option value="Tumpat">Tumpat</option>
                                                                <option value="Bachok">Bachok</option>
                                                                <option value="Tanah Merah">Tanah Merah</option>
                                                                <option value="Pasir Puteh">Pasir Puteh</option>
                                                                <option value="Kuala Krai">Kuala Krai</option>
                                                                <option value="Machang">Machang</option>
                                                                <option value="Gua Musang">Gua Musang</option>
                                                                <option value="Jeli">Jeli</option>
                                                                <option value="Lojing">Lojing</option>
                                                                <option value="Melaka Tengah">Melaka Tengah</option>
                                                                <option value="Alor Gajah">Alor Gajah</option>
                                                                <option value="Jasin">Jasin</option>
                                                                <option value="Seremban">Seremban</option>
                                                                <option value="Jempol">Jempol</option>
                                                                <option value="Port Dickson">Port Dickson</option>
                                                                <option value="Tampin">Tampin</option>
                                                                <option value="Kuala Pilah">Kuala Pilah</option>
                                                                <option value="Rembau">Rembau</option>
                                                                <option value="Jelebu">Jelebu</option>
                                                                <option value="Kuantan">Kuantan</option>
                                                                <option value="Temerloh">Temerloh</option>
                                                                <option value="Bentong">Bentong</option>
                                                                <option value="Maran">Maran</option>
                                                                <option value="Rompin">Rompin</option>
                                                                <option value="Pekan">Pekan</option>
                                                                <option value="Bera">Bera</option>
                                                                <option value="Raub">Raub</option>
                                                                <option value="Jerantut">Jerantut</option>
                                                                <option value="Lipis">Lipis</option>
                                                                <option value="Cameron Highlands">Cameron Highlands</option>
                                                                <option value="Kinta">Kinta</option>
                                                                <option value="Larut, Matang dan Selama">Larut, Matang dan Selama</option>
                                                                <option value="Manjung">Manjung</option>
                                                                <option value="Hilir Perak">Hilir Perak</option>
                                                                <option value="Kerian">Kerian</option>
                                                                <option value="Batang Padang">Batang Padang</option>
                                                                <option value="Kuala Kangsar">Kuala Kangsar</option>
                                                                <option value="Perak Tengah">Perak Tengah</option>
                                                                <option value="Hulu Perak">Hulu Perak</option>
                                                                <option value="Kampar">Kampar</option>
                                                                <option value="Muallim">Muallim</option>
                                                                <option value="Bagan Datuk">Bagan Datuk</option>
                                                                <option value="Perlis">Perlis</option>
                                                                <option value="Timur Laut Pulau Pinang">Timur Laut Pulau Pinang</option>
                                                                <option value="Seberang Perai Tengah">Seberang Perai Tengah</option>
                                                                <option value="Seberang Perai Utara">Seberang Perai Utara</option>
                                                                <option value="Barat Daya Pulau Pinang">Barat Daya Pulau Pinang</option>
                                                                <option value="Seberang Perai Selatan">Seberang Perai Selatan</option>
                                                                <option value="Kota Kinabalu">Kota Kinabalu</option>
                                                                <option value="Tawau">Tawau</option>
                                                                <option value="Sandakan">Sandakan</option>
                                                                <option value="Lahad Datu">Lahad Datu</option>
                                                                <option value="Keningau">Keningau</option>
                                                                <option value="Kinabatangan">Kinabatangan</option>
                                                                <option value="Semporna">Semporna</option>
                                                                <option value="Papar">Papar</option>
                                                                <option value="Penampang">Penampang</option>
                                                                <option value="Beluran">Beluran</option>
                                                                <option value="Tuaran">Tuaran</option>
                                                                <option value="Ranau">Ranau</option>
                                                                <option value="Kota Belud">Kota Belud</option>
                                                                <option value="Kudat">Kudat</option>
                                                                <option value="Kota Marudu">Kota Marudu</option>
                                                                <option value="Beaufort">Beaufort</option>
                                                                <option value="Kunak">Kunak</option>
                                                                <option value="Tenom">Tenom</option>
                                                                <option value="Putatan">Putatan</option>
                                                                <option value="Pitas">Pitas</option>
                                                                <option value="Tambunan">Tambunan</option>
                                                                <option value="Tongod">Tongod</option>
                                                                <option value="Sipitang">Sipitang</option>
                                                                <option value="Nabawan">Nabawan</option>
                                                                <option value="Kuala Penyu">Kuala Penyu</option>
                                                                <option value="Kuching">Kuching</option>
                                                                <option value="Miri">Miri</option>
                                                                <option value="Sibu">Sibu</option>
                                                                <option value="Bintulu">Bintulu</option>
                                                                <option value="Serian">Serian</option>
                                                                <option value="Kota Samarahan">Kota Samarahan</option>
                                                                <option value="Sri Aman">Sri Aman</option>
                                                                <option value="Marudi">Marudi</option>
                                                                <option value="Betong">Betong</option>
                                                                <option value="Sarikei">Sarikei</option>
                                                                <option value="Kapit">Kapit</option>
                                                                <option value="Bau">Bau</option>
                                                                <option value="Limbang">Limbang</option>
                                                                <option value="Saratok">Saratok</option>
                                                                <option value="Mukah">Mukah</option>
                                                                <option value="Simunjan">Simunjan</option>
                                                                <option value="Lawas">Lawas</option>
                                                                <option value="Belaga">Belaga</option>
                                                                <option value="Lundu">Lundu</option>
                                                                <option value="Asajaya">Asajaya</option>
                                                                <option value="Daro">Daro</option>
                                                                <option value="Tatau">Tatau</option>
                                                                <option value="Maradong">Maradong</option>
                                                                <option value="Kanowit">Kanowit</option>
                                                                <option value="Lubok Antu">Lubok Antu</option>
                                                                <option value="Selangau">Selangau</option>
                                                                <option value="Song">Song</option>
                                                                <option value="Dalat">Dalat</option>
                                                                <option value="Matu">Matu</option>
                                                                <option value="Julau">Julau</option>
                                                                <option value="Pakan">Pakan</option>
                                                                <option value="Tanjung Manis">Tanjung Manis</option>
                                                                <option value="Bukit Mabong">Bukit Mabong</option>
                                                                <option value="Telang Usan">Telang Usan</option>
                                                                <option value="Tebedu">Tebedu</option>
                                                                <option value="Subis">Subis</option>
                                                                <option value="Sebauh">Sebauh</option>
                                                                <option value="Marudi">Marudi</option>
                                                                <option value="Beluru">Beluru</option>
                                                                <option value="Kabong">Kabong</option>
                                                                <option value="Gedong">Gedong</option>
                                                                <option value="Siburan">Siburan</option>
                                                                <option value="Pantu">Pantu</option>
                                                                <option value="Lingga">Lingga</option>
                                                                <option value="Sebuyau">Sebuyau</option>
                                                                <option value="Petaling">Petaling</option>
                                                                <option value="Hulu Langat">Hulu Langat</option>
                                                                <option value="Klang">Klang</option>
                                                                <option value="Gombak">Gombak</option>
                                                                <option value="Kuala Langat">Kuala Langat</option>
                                                                <option value="Sepang">Sepang</option>
                                                                <option value="Kuala Selangor">Kuala Selangor</option>
                                                                <option value="Hulu Selangor">Hulu Selangor</option>
                                                                <option value="Sabak Bernam">Sabak Bernam</option>
                                                                <option value="Kuala Terengganu">Kuala Terengganu</option>
                                                                <option value="Kemaman">Kemaman</option>
                                                                <option value="Dungun">Dungun</option>
                                                                <option value="Besut">Besut</option>
                                                                <option value="Marang">Marang</option>
                                                                <option value="Hulu Terengganu">Hulu Terengganu</option>
                                                                <option value="Setiu">Setiu</option>
                                                                <option value="Kuala Nerus">Kuala Nerus</option>
                                                                <option value="Kuala Lumpur">Kuala Lumpur</option>
                                                                <option value="Labuan">Labuan</option>
                                                                <option value="Putrajaya">Putrajaya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="summary-delivery">
                                                            <select class="form-select" name="State" id="State"
                                                                aria-label="Default select example">
                                                                <option value="0" selected="selected">Negeri</option>
                                                                <option value="Selangor">Selangor</option>
                                                                <option value="Johor">Johor</option>
                                                                <option value="Kelantan">Kelantan</option>
                                                                <option value="Melaka">Melaka</option>
                                                                <option value="Kedah">Kedah</option>
                                                                <option value="Negeri Sembilan">Negeri Sembilan</option>
                                                                <option value="Kelantan">Pahang</option>
                                                                <option value="Pulau Pinang">Pulau Pinang</option>
                                                                <option value="Perak">Perak</option>
                                                                <option value="Perlis">Perlis</option>
                                                                <option value="Terengganu">Terengganu</option>
                                                                <option value="Sabah">Sabah</option>
                                                                <option value="Sarawak">Sarawak</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                               <hr>
                                                    <div class="text-center">
                                                        <input type="submit" value="Teruskan" class="btn"
                                                            style="background-color:#000; color:#eee; position: absolute; right: 10px; bottom: 25px;">
                                                    </div>
                                           
                                                <div class="d-flex justify-content-between pt-2">
                                                    <strong><p class="fw-bold mb-0">Butiran Pesanan</p></strong>
                                                    <strong><p class="text mb-0"><span class="fw-bold me-6">Jumlah RM </span>
                                                        {{ Cart::getTotal() }}</p></strong>
                                                </div>
                                             
                                               
                                            </div>
                                            <div class="card-footer border-0 px-2 py-5"
                                                style="background-color: #f37a27; border-bottom-left-radius: 4px; border-bottom-right-radius: 4px;">
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
            </fieldset>
        </form>
        <!--<form action="{{ route('cart.makeorder') }}" method="post" enctype="multipart/form-data">
            @csrf
            <fieldset>
                @if ($message = Session::get('success'))
                    <div class="p-4 mb-3 bg-green-400 rounded">
                        <p class="text-green-800">{{ $message }}</p>
                    </div>
                @endif
                <section class="vh-100 gradient-custom-2">
                    <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-md-10 col-lg-8 col-xl-6">
                                <div class="card card-stepper" style="border-radius: 16px;">
                                    <div class="card-header p-4">
                                        <h5 class="bold" style="color: #000">RINGKASAN PESANAN</h5>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <p class="text-muted mb-2"> Order ID <span
                                                        class="fw-bold text-body">@php echo sprintf("%06d",mt_rand(100000,999999)); @endphp</span></p>
                                                <p class="text-muted mb-0"> Place On <span
                                                        class="fw-bold text-body">12,March
                                                        2019</span> </p>
                                            </div>
                                            <div>
                                                <h6 class="mb-0"> <a href="#">View Details</a> </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="basket-product">
                                        @foreach ($orderItems as $item)
                                            <tr>
                                                <td class="hidden pb-4 md:table-cell">
                                                    <a href="#">
                                                        <img src="{{ $item->attributes->image }}" class="w-20 rounded"
                                                            alt="Thumbnail">
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <p class="mb-2 md:ml-4">{{ $item->name }}</p>

                                                    </a>
                                                </td>
                                                <td class="justify-center mt-6 md:justify-end md:flex">
                                                    <div class="h-10 w-28">
                                                        <div class="relative flex flex-row w-full h-8">

                                                            <form action="{{ route('cart.update') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="id"
                                                                    value="{{ $item->id }}">
                                                                <input type="number" name="quantity"
                                                                    value="{{ $item->quantity }}"
                                                                    class="w-6 text-center bg-gray-300" />

                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="hidden text-right md:table-cell">
                                                    <span class="text-sm font-medium lg:text-base">
                                                        RM {{ $item->price }}
                                                    </span>
                                                </td>
                                            <tr>
                                                <td colspan="5" class="text-right">
                                                    <h3><strong>Total RM{{ Cart::getTotal() }}</strong></h3>
                                                </td>
                                            </tr>


                                            </tr>
                                        @endforeach


                                    </div>

                                    <br>
                                    <div class="summary-total-items"><span class="total-items"></span> Items in your
                                        Bag
                                    </div>
                                    <div class="summary-subtotal">
                                        <div class="subtotal-title">Shipping fee</div>
                                        <div class="subtotal-value final-value" id="basket-subtotal">5.00</div>
                                        <div class="subtotal-title">Subtotal</div>
                                        <div class="subtotal-value final-value" id="basket-subtotal">RM
                                            {{ Cart::getTotal() }}</div>
                                        <div class="summary-promo hide">
                                            <div class="promo-title">Promotion</div>
                                            <div class="promo-value final-value" id="basket-promo"></div>
                                        </div>
                                    </div>
                                    <div class="summary-total">
                                        <div class="total-title">Total</div>
                                        <div class="total-value final-value" id="basket-total">130.00</div>
                                    </div>
                                    <h5 class="bold" style="color: #000">Maklumat Perhubungan</h5>
                                    <div class="row">
                                        <div class="form-group">
                                            <input type="hidden" name="id_order" id="id_order"
                                                value="@php echo sprintf("%06d",mt_rand(100000,999999)); @endphp"
                                                class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="id_pelanggan" id="id_pelanggan"
                                                class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="subtotal" id="subtotal"
                                                value="{{ Cart::getTotal() }}" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="Emel" id="Emel" class="form-control"
                                                    placeholder="E-mel">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="NamaPelanggan" id="NamaPelanggan"
                                                    class="form-control" placeholder="Nama">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="NoTel" id="NoTel" class="form-control"
                                                    placeholder="No Telefon">
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="bold" style="color: #000">Alamat Penghantaran</h5>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="Address" id="Address" class="form-control"
                                                    placeholder="Alamat">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="Postcode" id="Postcode"
                                                    class="form-control" placeholder="Poskod/Zip">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="City" id="City" class="form-control"
                                                    placeholder="Bandar">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="summary-delivery">
                                                <select class="form-select" name="District" id="District"
                                                    aria-label="Default select example">
                                                    <option value="0" selected="selected">Daerah</option>
                                                    <option value="Gombak">Gombak</option>
                                                    <option value="Klang">Klang</option>
                                                    <option value="Sepang">Sepang</option>
                                                    <option value="Hulu Langat">Hulu Langat</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="summary-delivery">
                                                <select class="form-select" name="State" id="State"
                                                    aria-label="Default select example">
                                                    <option value="Selangor">Selangor</option>
                                                    <option value="Johor">Johor</option>
                                                    <option value="Kelantan">Kelantan</option>
                                                    <option value="Melaka">Melaka</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary-checkout">
                                        <div class="text-center">
                                            <input type="submit" value="Confirm" class="btn btn-warning"
                                                style="position: absolute; right: 10px; bottom: 5px;">
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </fieldset>
        </form>-->
        </div>


        </div>

    </body>

@endsection

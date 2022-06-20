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
                                                <h5 class="text-muted mb-0">&nbsp Terima kasih kerana membuat pesanan dengan
                                                    kami, <span style="color: #f37a27;">Anna</span>!</h5>
                                            </div>
                                            <div class="card-body p-4">
                                                <div class="d-flex justify-content-between align-items-center mb-4">
                                                    <p class="lead fw-normal mb-0" style="color: #f37a27;">Ringkasan Pesanan
                                                    </p>
                                                    <p class="small text-muted mb-0">Order ID : @php echo sprintf("%06d",mt_rand(100000,999999)); @endphp</p>
                                                </div>
                                                @foreach ($orderItems as $item)
                                                <div class="card shadow-0 border mb-4">
                                                    <div class="card-body">
                                                        <div class="row">
                                                           
                                                                <div class="col-md-2">
                                                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/13.webp"
                                                                        class="img-fluid" alt="Phone">
                                                                </div>
                                                                <div
                                                                    class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                                    <p class="text-muted mb-0">{{ $item->name }}</p>
                                                                </div>
                                                                <div
                                                                    class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                                    <p class="text-muted mb-0 small">Kuantiti:
                                                                        {{ $item->quantity }}</p>
                                                                </div>
                                                                <div
                                                                    class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                                    <p class="text-muted mb-0 small">RM {{ $item->price }}
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
                                                            <input type="text" name="NoTel" id="NoTel"
                                                                class="form-control" placeholder="No Telefon">
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
                                               
                                               <hr>
                                                    <div class="text-center">
                                                        <input type="submit" value="Confirm" class="btn"
                                                            style="background-color:#000; color:#eee; position: absolute; right: 10px; bottom: 5px;">
                                                    </div>
                                           
                                                <div class="d-flex justify-content-between pt-2">
                                                    <p class="fw-bold mb-0">Order Details</p>
                                                    <p class="text-muted mb-0"><span class="fw-bold me-4">Total RM </span>
                                                        {{ Cart::getTotal() }}</p>
                                                </div>
                                             
                                               
                                            </div>
                                            <div class="card-footer border-0 px-4 py-5"
                                                style="background-color: #f37a27; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                <h5
                                                    class="d-flex align-items-center justify-content-end text-white texT mb-0">
                                                    Jumlah bayaran: &nbsp <span class="h2 mb-0 ms-2"> RM {{ Cart::getTotal() }}</span></h5>
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

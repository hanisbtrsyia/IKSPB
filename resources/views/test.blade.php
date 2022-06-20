@extends('layouts.homepage')
@section('title', 'Troli')
@section('content')

    <body>
        <div class="content-wrapper">
            <div class="content-header">
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
                                                        class="fw-bold text-body">1222528743</span></p>
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
                                        @foreach ($ordercart as $item)
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
                                                                <button type="submit"
                                                                    class="btn btn-warning btn-flat">Kemaskini</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="hidden text-right md:table-cell">
                                                    <span class="text-sm font-medium lg:text-base">
                                                        RM {{ $item->price }}
                                                    </span>
                                                </td>

                                                <td class="hidden text-right md:table-cell">
                                                    <form action="{{ route('cart.remove') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                                        <button class="btn btn-danger btn-sm remove-from-cart">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-trash-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                            </svg>
                                                        </button>
                                                    </form>

                                                </td>

                                            </tr>
                                        @endforeach

                                        <div class="price">26.00</div>
                                        <div class="quantity">
                                            <input type="number" value="4" min="1" class="quantity-field">
                                        </div>
                                    </div>
                                    <div class="basket-product">
                                        <div class="item">
                                            <div class="product-image">
                                                <img src="../assets/images/produk/ubi.jfif" alt="Placholder Image 2"
                                                    class="product-frame">
                                            </div>
                                            <div class="product-details">
                                                <h1><strong><span class="item-quantity">1</span> x Whistles</strong>
                                                    Kerepek
                                                    Ubi Kari Adrianna Anissa</h1>
                                                <p><strong>Navy, Size 10</strong></p>
                                                <p>Product Code - 232321939</p>
                                            </div>
                                        </div>
                                        <div class="price">26.00</div>
                                        <div class="quantity">
                                            <input type="number" value="1" min="1" class="quantity-field">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="summary-total-items"><span class="total-items"></span> Items in your
                                        Bag
                                    </div>
                                    <div class="summary-subtotal">
                                        <div class="subtotal-title">Shipping fee</div>
                                        <div class="subtotal-value final-value" id="basket-subtotal">5.00</div>
                                        <div class="subtotal-title">Subtotal</div>
                                        <div class="subtotal-value final-value" id="basket-subtotal">130.00</div>
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
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="Emel" id="Emel" class="form-control"
                                                    placeholder="E-mel">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="Nama" id="Nama" class="form-control"
                                                    placeholder="Nama">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="No Telefon" id="No Telefon"
                                                    class="form-control" placeholder="No Telefon">
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="bold" style="color: #000">Alamat Penghantaran</h5>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="Alamat" id="Alamat" class="form-control"
                                                    placeholder="Alamat">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="Poskod/Zip" id="Poskod/Zip"
                                                    class="form-control" placeholder="Poskod/Zip">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="Bandar" id="Bandar" class="form-control"
                                                    placeholder="Bandar">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="summary-delivery">
                                                <select name="delivery-collection" class="summary-delivery-selection">
                                                    <option value="0" selected="selected">Daerah</option>
                                                    <option value="collection">Gombak</option>
                                                    <option value="first-class">Klang</option>
                                                    <option value="second-class">Sepang</option>
                                                    <option value="signed-for">Hulu Langat</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="summary-delivery">
                                                <select name="delivery-collection" class="summary-delivery-selection">
                                                    <option value="0" selected="selected">Negeri</option>
                                                    <option value="collection">Selangor</option>
                                                    <option value="first-class">Johor</option>
                                                    <option value="second-class">Kelantan</option>
                                                    <option value="signed-for">Melaka</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary-checkout">
                                        <a href="/belibelah/membuatpesanan"><button class="checkout-cta">Semak
                                                Keluar</button></a>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
            </header>
        </div>
        </div>
    </body>

@endsection

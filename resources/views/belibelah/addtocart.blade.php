<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IKSPB</title>
    <link rel="icon" href="../assets/images/Pahang.png" type="image/x-icon" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../../assets/css/ui.css" rel="stylesheet">
    <link href="../../assets/css/responsive.css" rel="stylesheet">
    <link href="../../assets/css/addtocart.css" rel="stylesheet">
    <link href="../../assets/css/all.min.css" rel="stylesheet">
    <script src="../../assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="../../assets/js/addtocart.js" type="text/javascript"></script>
   
</head>

<body>

    <header class="section-header">
        <nav class="navbar navbar-dark navbar-expand p-0" style="background-color:#FFB923;">
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
                    <li class="nav-item"><a href="#" class="nav-link" style="color:#000;"> Call: +0000000000
                        </a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color:#000;"> Bahasa
                            Malaysia </a>
                        <ul class="dropdown-menu dropdown-menu-right" style="max-width: 100px;">
                            <li><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">Russian </a></li>
                        </ul>
                    </li>
                </ul> <!-- list-inline //  -->

            </div> <!-- container //  -->
        </nav> <!-- header-top-light.// -->
        <section class="header-main border-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-6">
                        <a href="#" class="brand-wrap" style="font-family:verdana">
                            e-Pasar IKS Pahang Barat
                        </a> <!-- brand-wrap.// -->
                    </div>
                    <div class="col-lg-6 col-12 col-sm-12">
                        <form action="#" class="search">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" placeholder="Cari">
                                <div class="input-group-append">
                                    <button class="btn" style="background-color:#FFB923;" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form> <!-- search-wrap .end// -->
                    </div> <!-- col.// -->
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="widgets-wrap float-md-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-info" data-toggle="dropdown">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                </button>
                                <div class="dropdown-menu">
                                    <div class="row total-header-section">
                                        <div class="col-lg-6 col-sm-6 col-6">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                        </div>
                                        @php $total = 0 @endphp
                                        @foreach((array) session('cart') as $id => $details)
                                            @php $total += $details['Harga'] * $details['Kuantiti'] @endphp
                                        @endforeach
                                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                            <p>Total: <span class="text-info"></span></p>
                                        </div>
                                    </div>
                                    @if(session('cart'))
                                        @foreach(session('cart') as $id => $details)
                                            <div class="row cart-detail">
                                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                                    <img src="" />
                                                </div>
                                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                    <p>{{ $details['NamaProduk'] }}</p>
                                                    <span class="price text-info"> ${{ $details['Harga'] }}</span> <span class="count"> Quantity:{{ $details['Kuantiti'] }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                            <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="widget-header  mr-3">
                                <a href="#" class="icon icon-sm rounded-circle border"><i
                                        class="fa fa-shopping-cart"></i></a>
                                <span class="badge badge-pill badge-danger notify">0</span>
                            </div>-->
                            <div class="widget-header icontext">
                                <a href="#" class="icon icon-sm rounded-circle border"><i
                                        class="fa fa-user"></i></a>
                                        <div class="text">
                                            @auth
                                                @if (Auth::user()->role == 'pelanggan')
                                                    <span class="text-muted">{{Auth::user()->name}}</span>
                                                    <div>
                                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                            class="d-none">
                                                            @csrf
        
                                                        </form>
                                                @endif
                                            @else
                                                <span class="text-muted">Anda seorang peniaga?</span>
                                                <div>
                                                    <a href="{{ route('login') }}">Log Masuk</a> |
                                                    <a href="{{ route('register') }}"> Daftar Masuk</a>
                                                @endauth
                                            </div>
                                        </div>
                            </div>
                        </div> <!-- widgets-wrap.// -->
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- container.// -->
        </section> <!-- header-main .// -->

        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Basket</title>
        </head>

        <body>
            <!--<main>
                <div class="basket">
                    <div class="basket-module">
                        <label for="promo-code">Enter a promotional code</label>
                        <input id="promo-code" type="text" name="promo-code" maxlength="5" class="promo-code-field">
                        <button class="promo-code-cta">Apply</button>
                    </div>
                    <div class="basket-labels">
                        <ul>
                            <li class="item item-heading"></li>
                            <li class="Harga"></li>
                            <li class="Kuantiti"></li>
                            <li class="JumlahBayaranItem"></li>
                        </ul>
                    </div>
                    <div class="basket-product">
                        <div class="item">
                            <div class="product-image">
                                <img src="" alt="Placholder Image 2" class="product-frame">
                            </div>
                            <div class="product-details">
                                <h1><strong><span class="item-quantity">4</span> x Eliza J</strong> Kerepek
                                    Peria Wanz
                                    Bitez</h1>
                                <p><strong>Navy, Size 18</strong></p>
                                <p>Product Code - 232321939</p>
                            </div>
                        </div>
                        <div class="price">26.00</div>
                        <div class="quantity">
                            <input type="number" value="4" min="1" class="quantity-field">
                        </div>
                        <div class="subtotal">104.00</div>
                        <div class="remove">
                            <button>Remove</button>
                        </div>
                    </div>
                    <div class="basket-product">
                        <div class="item">
                            <div class="product-image">
                                <img src="../assets/images/produk/ubi.jfif" alt="Placholder Image 2"
                                    class="product-frame">
                            </div>
                            <div class="product-details">
                                <h1><strong><span class="item-quantity">1</span> x Whistles</strong> Kerepek
                                    Ubi Kari
                                    Adrianna Anissa</h1>
                                <p><strong>Navy, Size 10</strong></p>
                                <p>Product Code - 232321939</p>
                            </div>
                        </div>
                        <div class="price">26.00</div>
                        <div class="quantity">
                            <input type="number" value="1" min="1" class="quantity-field">
                        </div>
                        <div class="subtotal">26.00</div>
                        <div class="remove">
                            <button>Remove</button>
                        </div>
                    </div>
                </div>
                <aside>
                    <div class="summary">
                        <div class="summary-total-items"><span class="total-items"></span> Items in your Bag
                        </div>
                        <div class="summary-subtotal">
                            <div class="subtotal-title">Subtotal</div>
                            <div class="subtotal-value final-value" id="basket-subtotal">130.00</div>
                            <div class="summary-promo hide">
                                <div class="promo-title">Promotion</div>
                                <div class="promo-value final-value" id="basket-promo"></div>
                            </div>
                        </div>
                        <div class="summary-delivery">
                            <select name="delivery-collection" class="summary-delivery-selection">
                                <option value="0" selected="selected">Select Collection or Delivery</option>
                                <option value="collection">Collection</option>
                                <option value="first-class">Royal Mail 1st Class</option>
                                <option value="second-class">Royal Mail 2nd Class</option>
                                <option value="signed-for">Royal Mail Special Delivery</option>
                            </select>
                        </div>
                        <div class="summary-total">
                            <div class="total-title">Total</div>
                            <div class="total-value final-value" id="basket-total">130.00</div>
                        </div>
                        <div class="summary-checkout">
                            <a href="/belibelah/membuatpesanan"><button class="checkout-cta">Go to Secure
                                    Checkout</button></a>
                        </div>
                    </div>
                </aside>
            </main>-->

            <table id="cart" class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th style="width:50%">Produk</th>
                        <th style="width:10%">Harga</th>
                        <th style="width:8%">Kuantiti</th>
                        <th style="width:22%" class="text-center">Jumlah</th>
                        <th style="width:10%"></th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0 @endphp
                    @if (session('cart'))
                        @foreach (session('cart') as $id_produk => $details)
                            @php $total += $details['Harga'] * $details['Kuantiti'] @endphp
                            <tr data-id="{{ $id_produk }}">
                                <p>{{$id_produk}}</p>
                                <td data-th="Produk">
                                    <div class="row">
                                        <div class="col-sm-3 hidden-xs"><img src="" width="100" height="100"
                                                class="img-responsive" /></div>
                                        <div class="col-sm-9">
                                            <h4 class="nomargin">{{ $details['NamaProduk'] }}</h4>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Harga">RM {{ $details['Harga'] }}</td>
                                <td data-th="Kuantiti">
                                    <input type="number" value="{{ $details['Kuantiti'] }}" min="1" class="quantity-field">
                                   <!-- <input type="number" value="{{ $details['Kuantiti'] }}"
                                        class="form-control quantity update-cart" />-->
                                </td>

                                <td data-th="Jumlah" class="text-center">RM
                                    {{ $details['Harga'] * $details['Kuantiti'] }}</td>
                                <td class="actions" data-th="">
                                    <button class="btn btn-danger btn-sm remove-from-cart">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5" class="text-right">
                            <h3><strong>Total RM{{ $total }}</strong></h3>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-right">
                            <a href="{{ url('/homebelibelah') }}" class="btn btn-warning"><i
                                    class="fa fa-angle-left"></i> Continue Shopping</a>
                            <button class="btn btn-success"> <a href="{{ url('/belibelah/membuatpesanan') }}">Checkout</button></a>
                        </td>
                    </tr>
                </tfoot>
            </table>

            @section('scripts')
                <script type="text/javascript">
                    $(".update-cart").change(function(e) {
                        e.preventDefault();

                        var ele = $(this);

                        $.ajax({
                            url: '{{ route('update.cart') }}',
                            method: "patch",
                            data: {
                                _token: '{{ csrf_token() }}',
                                id: ele.parents("tr").attr("data-id"),
                                quantity: ele.parents("tr").find(".Kuantiti").val()
                            },
                            success: function(response) {
                                window.location.reload();
                            }
                        });
                    });

                    $(".remove-from-cart").click(function(e) {
                        e.preventDefault();

                        var ele = $(this);

                        if (confirm("Are you sure you want to remove?")) {
                            $.ajax({
                                url: '{{ route("remove.from.cart") }}',
                                method: "DELETE",
                                data: {
                                    _token: '{{ csrf_token() }}',
                                    id: ele.parents("tr").attr("data-id")
                                },
                                success: function(response) {
                                    window.location.reload();
                                }
                            });
                        }
                    });
                </script>
            @endsection
    </header>

</body>

</html>

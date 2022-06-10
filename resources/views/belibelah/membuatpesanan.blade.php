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
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/ui.css" rel="stylesheet">
    <link href="../assets/css/responsive.css" rel="stylesheet">
    <link href="../assets/css/addtocart.css" rel="stylesheet">
    <link href="../assets/css/all.min.css" rel="stylesheet">
    <link href="../assets/css/membuatpesanan.css" rel="stylesheet">
    <script src="../assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="../assets/js/addtocart.js" type="text/javascript"></script>
</head>

<body>

    <header class="section-header">
        <nav class="navbar navbar-dark navbar-expand p-0" style="background-color:#FFB923;">
            <div class="container">
                <ul class="navbar-nav d-none d-md-flex mr-auto">
                    <li class="nav-item"><a class="nav-link" href="/welcome" style="color:#000;">Laman
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
                            <div class="widget-header  mr-3">
                                <a href="#" class="icon icon-sm rounded-circle border"><i
                                        class="fa fa-shopping-cart"></i></a>
                                <span class="badge badge-pill badge-danger notify">0</span>
                            </div>
                            <div class="widget-header icontext">
                                <a href="#" class="icon icon-sm rounded-circle border"><i
                                        class="fa fa-user"></i></a>
                                <div class="text">
                                    <span class="text-muted">Selamat Datang!</span>
                                    <div>
                                        <a href="/login">Log Masuk</a> |
                                        <a href="/register"> Daftar Masuk</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- widgets-wrap.// -->
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- container.// -->
        </section> <!-- header-main .// -->

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
                                        <p class="text-muted mb-0"> Place On <span class="fw-bold text-body">12,March
                                                2019</span> </p>
                                    </div>
                                    <div>
                                        <h6 class="mb-0"> <a href="#">View Details</a> </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="basket-product">
                                <div class="item">
                                    <div class="product-image">
                                        <img src="../assets/images/produk/peria.jpg" alt="Placholder Image 2"
                                            class="product-frame">
                                    </div>
                                    <div class="product-details">
                                        <h1><strong><span class="item-quantity">4</span> x Eliza J</strong> Kerepek
                                            Peria Wanz Bitez</h1>
                                        <p><strong>Navy, Size 18</strong></p>
                                        <p>Product Code - 232321939</p>
                                    </div>
                                </div>
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
                                        <h1><strong><span class="item-quantity">1</span> x Whistles</strong> Kerepek
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
                            <div class="summary-total-items"><span class="total-items"></span> Items in your Bag
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
                                        <input type="text" name="No Telefon" id="No Telefon" class="form-control"
                                            placeholder="No Telefon">
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
                                        <input type="text" name="Poskod/Zip" id="Poskod/Zip" class="form-control"
                                            placeholder="Poskod/Zip">
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
</body>

</html>

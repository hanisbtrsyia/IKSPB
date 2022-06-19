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
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

    <header class="section-header">
        <nav class="navbar navbar-dark navbar-expand p-0" style="background-color:#FFB923;">
            <div class="container">
                <ul class="navbar-nav d-none d-md-flex mr-auto">
                    <li class="nav-item"><a class="nav-link" href="/" style="color:#000;">Laman
                            Utama</a></li>
                    <li class="nav-item"><a class="nav-link" href="/homebelibelah" style="color:#000;">Beli-Belah</a>
                    </li>
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
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color:#000;">
                            Bahasa
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
                                            <span class="text-muted">{{ Auth::user()->name }}</span>
                                            <div>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
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
           
            @if ($message = Session::get('success'))
                <div class="p-4 mb-3 bg-green-400 rounded">
                    <p class="text-green-800">{{ $message }}</p>
                </div>
            @endif
            <table class="w-full text-sm lg:text-base" cellspacing="0">
                <thead>
                  <tr class="h-12 uppercase">
                    <th class="hidden md:table-cell"></th>
                    <th class="text-left">Name</th>
                    <th class="pl-5 text-left lg:text-right lg:pl-0">
                      <span class="lg:hidden" title="Quantity">Qtd</span>
                      <span class="hidden lg:inline">Quantity</span>
                    </th>
                    <th class="hidden text-right md:table-cell"> price</th>
                    <th class="hidden text-right md:table-cell"> Remove </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $item)
                  <tr>
                    <td class="hidden pb-4 md:table-cell">
                      <a href="#">
                        <img src="{{ $item->attributes->image }}" class="w-20 rounded" alt="Thumbnail">
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
                            <input type="hidden" name="id" value="{{ $item->id}}" >
                          <input type="number" name="quantity" value="{{ $item->quantity }}" 
                          class="w-6 text-center bg-gray-300" />
                          <button type="submit" class="px-2 pb-2 ml-2 text-white bg-blue-500">update</button>
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
                        <button class="px-4 py-2 text-white bg-red-600">x</button>
                    </form>
                      
                    </td>
                  </tr>
                  @endforeach
                   
                </tbody>
              </table>
              <div>
                Total: RM {{ Cart::getTotal() }}
               </div>
               <div>
                 <form action="{{ route('cart.clear') }}" method="POST">
                   @csrf
                   <button class="px-6 py-2 text-red-800 bg-red-300">Remove All Cart</button>
                 </form>
               </div>
               <tfoot>
               <tr>
                <td colspan="5" class="text-right">
                    <a href="{{ url('/homebelibelah') }}" class="btn btn-warning"><i
                            class="fa fa-angle-left"></i> Continue Shopping</a>
                    <button class="btn btn-success"> <a href="{{ url('/belibelah/membuatpesanan') }}">Checkout</button></a>
                </td>
            </tr>
        </tfoot>
           
    </header>

</body>

</html>

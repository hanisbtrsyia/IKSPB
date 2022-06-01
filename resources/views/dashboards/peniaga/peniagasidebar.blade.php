<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Theme style -->
    <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logoparkir2.png') }}">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <!-- <a href="#" class="nav-link">Home</a> -->
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #000">
            <!-- Brand Logo -->
            <a href="/home" class="brand-link">
                <div class="text-center">
                    <img src="../../assets/images/Pahang.png" alt="AdminLTE Logo"
                        class="brand-image-center img-circle elevation-3" style="width:20%;"><br>
                    <span class="brand-text font-weight-light">e-Pasar IKSPB</span>
                </div>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('images/admin1.jpeg') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ \Illuminate\Support\Facades\Auth::user()->name }} |
                            {{ ucfirst(\Illuminate\Support\Facades\Auth::user()->role) }}</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="/dashboards/peniaga/profile">
                                <p> <i class="nav-icon fas fa-bell"></i>
                                    Profile
                                    <span class="right badge badge-danger"></span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-is-opening menu-open">
                        <li class="nav-item">
                            <a href="/pelancongan/peniaga/homeTempatPenginapan" class="nav-link active"
                                style="background-color: #ffb923">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Tempat Penginapan
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        </li>
                        <ul class="nav nav-treeview" style="display: block;">
                            <li class="nav-item">
                                <a href="/pelancongan/addTempatPenginapan" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tambah Tempat Penginapan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/pelancongan/peniaga/ListTempatPenginapan" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kemaskini Tempat Penginapan</p>
                                </a>
                            </li>
                        </ul>
                        </li>

                        <li class="nav-item menu-is-opening menu-open">
                        <li class="nav-item">
                            <a href="/pelancongan/peniaga/homebelibelah" class="nav-link active"
                                style="background-color: #ffb923">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Produk
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        </li>
                        <ul class="nav nav-treeview" style="display: block;">
                            <li class="nav-item">
                                <a href="/belibelah/addproduk" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tambah Produk</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/pelancongan/peniaga/ListProduk" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kemaskini Produk</p>
                                </a>
                            </li>
                        </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/pelancongan/peniaga/lihatpesanan">
                                <p> <i class="nav-icon fas fa-bell"></i>
                                    Lihat Pesanan
                                    <span class="right badge badge-danger"></span>
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        @yield('content')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->

        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
                integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @stack('scripts')
</body>

</html>

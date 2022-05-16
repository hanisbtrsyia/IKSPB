<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="icon" href="../../assets/images/items/1.jpg" type="image/x-icon"/>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../../assets/css/ui.css" rel="stylesheet">
    <link href="../../assets/css/responsive.css" rel="stylesheet">
    <link href="../../assets/css/all.min.css" rel="stylesheet">
    <script src="../../assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
            
</head>
<body>
    
<header class="section-header">
<nav class="navbar navbar-dark navbar-expand p-0" style="background-color:#FFB923;"> 
<div class="container">
<ul class="navbar-nav d-none d-md-flex mr-auto">
<li class="nav-item"><a class="nav-link" href="/welcome" style="color:#000;">Laman Utama</a></li>
<li class="nav-item"><a class="nav-link" href="/homebelibelah" style="color:#000;">Beli-Belah</a></li>
<li class="btn-group dropright">
    <a href="/homepelancongan" class="btn dropdown-toggle" data-toggle="dropdown" style="color:#000;"> Pelancongan </a>
    <ul class="dropdown-menu dropdown-menu-right" style="max-width: 100px;">
    <li><a class="dropdown-item" href="/homeTempatMenarik">Tempat Menarik</a></li>
    <li><a class="dropdown-item" href="/homeTempatPenginapan">Tempat Penginapan</a></li>
    </ul>
</li>
</ul>
<ul class="navbar-nav">
<li  class="nav-item"><a href="#" class="nav-link" style="color:#000;"> Call: +0000000000 </a></li>
<li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color:#000;"> Bahasa Malaysia </a>
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
    <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
    <span class="badge badge-pill badge-danger notify">0</span>
    </div>
    <div class="widget-header icontext">
    <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
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
<p></p>

<!-- ========================= SECTION INTRO ========================= -->

<!-- ========================= SECTION FEATURE END// ========================= -->
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content">
<div class="container">
<header class="section-heading">
<h3 class="section-title">Cameron Highlands</h3>
</header><!-- sect-heading -->

<section class="section-intro padding-y-sm">
<div class="container">
<div class="intro-banner-wrap">
    <img src="../../assets/images/attractions/Cameron.jpg" class="img-fluid center" style="height:50%; width:70%;">
</div>
</div> <!-- container //  -->
</section>
</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
<!-- ========================= SECTION CONTENT ========================= -->

<div class="row">
    <div class="col-md-6 center">
        <div class="card">
            <div class="card-header">
            <h5 class="card-title m-0">Cameron Highlands</h5>
            </div>
            <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#" class="btn btn-warning">Go somewhere</a>
            </div>
            </div>
    </div>
</div>
</body>
</html>

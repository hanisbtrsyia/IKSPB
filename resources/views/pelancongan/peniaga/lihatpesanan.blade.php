@extends('layouts.master')
@section('title','Tempat Menarik')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>IKSPB</title>
        <link rel="icon" href="assets/images/items/1.jpg" type="image/x-icon"/>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       <!-- Custom styles for this template -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/ui.css" rel="stylesheet">
        <link href="assets/css/responsive.css" rel="stylesheet">
        
        <link href="assets/css/all.min.css" rel="stylesheet">
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
                
    </head>
    <body>
        <div class="content-wrapper">
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
<br>
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
    <br>
  </div> <!-- col.// -->
  <div class="col-lg-4 col-sm-6 col-12">
    <div class="widgets-wrap float-md-right">
      <div class="widget-header  mr-3">
      
      </div>
      <div class="widget-header icontext">
      
        <div class="text">
         
         
        </div>
        <br>
      </div>
    </div> <!-- widgets-wrap.// -->
  </div> <!-- col.// -->
</div> <!-- row.// -->
  </div> <!-- container.// -->
</section> <!-- header-main .// -->        
<div class="row">
    <div class="col-12">
    <div class="card">
    <div class="card-header">
    <h3 class="card-title">2 Pesanan</h3>
    <div class="card-tools">
    
    </div>
    </div>
    
    <div class="card-body table-responsive p-0" >
    <table class="table table-head-fixed text-nowrap">
    <thead>
    <tr>
    <th>Produk</th>
    <th>Kuantiti</th>
    <th>Jumlah Harga</th>
    <th>Status</th>
    <th>Tindakan</th>
    </tr>
    </thead>
    <tbody>
        <tbody style="background-color: #dee2e6">
           
               <td style="width: 40%" class="text-left">
                    Muhammad Izhan
                </td>
                <td style="width: 40%" class="text-right">
                    </td>
                <td style="width: 40%" class="text-right">
                    </td>
                <td style="width: 40%" class="text-right">
                        </td>
                <td style="width: 40%" class="text-right">
                       ORDER ID: 0001</td>
                                                        

        </tbody>
    <tr>
        <td>
        <div class="basket-product">
            <div class="item">
              <div class="product-image">
                <img src="../../assets/images/produk/peria.jpg" alt="Placholder Image 2" class="product-frame" style="height:20%; width:25%;">
              </div>
            </div>
         
              <div class="product-details">
                <h6><strong><span class="item-quantity">2</span>x Kerepek Peria Wanz Bitez</strong></h6>
                <h6>26.00</h6>
        </div>
            </div>
        </td>
    <td>2</td>
    <td>52.00</td>
    <td><span class="tag tag-success">Untuk Dihantar</span></td>
    <td>Atur Penghantaran</td>
    </tr>
    <tr>
        <td>
        <div class="basket-product">
            <div class="item">
              <div class="product-image">
                <img src="../../assets/images/produk/ubi.jfif" alt="Placholder Image 2" class="product-frame" style="height:20%; width:25%;">
              </div>
            </div>
         
              <div class="product-details">
                <h6><strong><span class="item-quantity">2</span>x Kerepek Ubi Kari Adrianna Anissa</strong></h6>
                <h6>20.00</h6>
        </div>
            </div>
        </td>
    <td>2</td>
    <td>40.00</td>
    <td><span class="tag tag-success">Untuk Dihantar</span></td>
    <td>Atur Penghantaran</td>
    </tr>
    
    </tbody>
    </table>
    </div>
    
    </div>
    
    </div>
    </div>

    </body>
</html>
</div>
@endsection
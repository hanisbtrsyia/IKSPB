<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'e-Pasar IKSPB') }}</title>
    <title>IKSPB</title>
    <link rel="icon" href="assets/images/Pahang.png" type="image/x-icon" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="{{ asset('css/adminlte.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        @if (Auth::user()->role == 'admin')
            @include('dashboards.admin.adminsidebar')
        @elseif (Auth::user()->role == 'peniaga')
            @include('dashboards.peniaga.peniagasidebar')
        @elseif (Auth::user()->role == 'pelanggan')
            @include('welcome')
        @endif

        <!-- Content Wrapper. Contains page content -->
        <!-- <div class="content-wrapper">
      Content Header (Page header) -->
        <!--<section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>@yield('title', 'IKSPB')</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">@yield('title', 'Page Title')</li>
              </ol>
            </div>
          </div>
        </div> /.container-fluid
      </section>-->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <!--  -->
            </section>
        </div>

        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2022 <a href="https://ikspb.dev" style="color: #ffb923">e-Pasar IKSPB</a>.</strong>
            All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <script src="{{ asset('js/adminlte.min.js') }}" defer></script>
</body>

</html>

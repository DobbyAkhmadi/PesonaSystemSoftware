<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pesona Game Center | Dashboard</title>
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/flag-icon-css/css/flag-icon.min.css')}}">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 25%;
      height: 10%;
    }</style>

</head>
<body class="sidebar-mini">
  <div class="wrapper">

    <!-- Top Logo Username -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="{{asset('assets/img/PesonaGameLogo.png')}}" alt="Pesona Game Center" height="500" width="800">
    </div>
    <!-- /.Sidebar -->
    @include('layouts.sidebartop')
    @include('layouts.adminslidebar')
    <!-- /.sidebar -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><strong>Pesona Game Center</strong> </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active">Promo</li>

          </ol>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->

<div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">
      <i class="fas fa-coins"></i>
      Kode Promo
    </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
          <div class="col-sm-4">
            <div class="position-relative p-3 bg-gray" style="height: 180px">
              <div class="ribbon-wrapper">
                <div class="ribbon bg-primary">
                  Ribbon
                </div>
              </div>
              Ribbon Default <br>
              <small>.ribbon-wrapper.ribbon-lg .ribbon</small>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="position-relative p-3 bg-gray" style="height: 180px">
              <div class="ribbon-wrapper ribbon-lg">
                <div class="ribbon bg-info">
                  Ribbon Large
                </div>
              </div>
              Ribbon Large <br>
              <small>.ribbon-wrapper.ribbon-lg .ribbon</small>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="position-relative p-3 bg-gray" style="height: 180px">
              <div class="ribbon-wrapper ribbon-xl">
                <div class="ribbon bg-secondary">
                  Ribbon Extra Large
                </div>
              </div>
              Ribbon Extra Large <br>
              <small>.ribbon-wrapper.ribbon-xl .ribbon</small>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-sm-4">
            <div class="position-relative p-3 bg-gray" style="height: 180px">
              <div class="ribbon-wrapper ribbon-lg">
                <div class="ribbon bg-success text-lg">
                  Ribbon
                </div>
              </div>
              Ribbon Large <br> with Large Text <br>
              <small>.ribbon-wrapper.ribbon-lg .ribbon.text-lg</small>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="position-relative p-3 bg-gray" style="height: 180px">
              <div class="ribbon-wrapper ribbon-xl">
                <div class="ribbon bg-warning text-lg">
                  Ribbon
                </div>
              </div>
              Ribbon Extra Large <br> with Large Text <br>
              <small>.ribbon-wrapper.ribbon-xl .ribbon.text-lg</small>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="position-relative p-3 bg-gray" style="height: 180px">
              <div class="ribbon-wrapper ribbon-xl">
                <div class="ribbon bg-danger text-xl">
                  Ribbon
                </div>
              </div>
              Ribbon Extra Large <br> with Extra Large Text <br>
              <small>.ribbon-wrapper.ribbon-xl .ribbon.text-xl</small>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-sm-4">
            <div class="position-relative">
              <img src="{{asset('dist/img/photo1.png')}}" alt="Photo 1" class="img-fluid">
              <div class="ribbon-wrapper ribbon-lg">
                <div class="ribbon bg-success text-lg">
                  Ribbon
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="position-relative">
              <img src="{{asset('dist/img/photo2.png')}}" alt="Photo 2')}}" class="img-fluid">
              <div class="ribbon-wrapper ribbon-xl">
                <div class="ribbon bg-warning text-lg">
                  Ribbon
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="position-relative" style="min-height: 180px;">
              <img src="{{asset('dist/img/photo3.jpg')}}" alt="Photo 3" class="img-fluid">
              <div class="ribbon-wrapper ribbon-xl">
                <div class="ribbon bg-danger text-xl">
                  Ribbon
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
  </div>





  <!-- /.col -->

</div>

<!-- /.row -->
</div><!--/. container-fluid -->

</section>
</section>
<!-- /.content -->

</div>

<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark" >
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
    @include('layouts.Footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard2.js')}}"></script>
<script src="{{asset('index.js')}}"></script>

<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>

</body>
</html>

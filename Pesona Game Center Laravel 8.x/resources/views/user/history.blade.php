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
</head>
<body class="sidebar-mini">
  <div class="wrapper">
    <!-- Top Logo Username -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="{{asset('../assets/img/PesonaGameLogo.png')}}" alt="Pesona Game Center" height="500" width="800">
      </div>
      <!-- /.Sidebar -->
      @include('layouts.sidebartop')
      @include('layouts.sidebar')
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
              <li class="breadcrumb-item active">Riwayat</li>

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
        <i class="fas fa-history"></i>
       Riwayat Transaksi
      </h3>
        </div>
        <div class="card-body">
          <div class="card card-primary card-outline">
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>No Transaksi</th>
                      <th>Tanggal</th>
                      <th>Nama PlayStation</th>
                      <th>Paket</th>
                      <th>Status Pembayaran</th>
                      <th>Status Voucher</th>
                      <th>Berlaku Sampai</th>
                      <th>Status Transaksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><strong>S01-PS5-040721-001</strong></td>
                      <td>04-July-2021</td>
                      <td><span class="badge badge-info">Playstation 5</span></td>
                      <td><span class="badge badge-success">Normal</span></td>
                      <td><span class="badge badge-success">Sudah Dibayar</span></td>
                      <td><span class="badge badge-success">Sudah Digunakan</span></td>
                      <td><span class="badge badge-success">10-Jun-2021</span></td>
                      <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg"><i class="fas fa-calendar-check"></i>  Cetak</button></td>
                      </tr>
                      <tr>
                        <td><strong>S02-PS5-040721-002</strong></td>
                        <td>05-July-2021</td>
                        <td><span class="badge badge-info">Playstation 5</span></td>
                        <td><span class="badge badge-success">Ramadhan</span></td>
                        <td><span class="badge badge-success">Sudah Dibayar</span></td>
                        <td><span class="badge badge-info ">Belum Digunakan</span></td>
                        <td><span class="badge badge-success">10-Jun-2021</span></td>
                        <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg"><i class="fas fa-calendar-check"></i>  Cetak</button></td>
                        </tr>
                        </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
            </div>
          </div>

        </div>


      </div>
      
    <!-- /.col -->

  </div>

  <!-- /.row -->
</div><!--/. container-fluid -->

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
<footer class="main-footer">
<strong>Copyright &copy; 2021 Pesona Game Center</strong>
All rights reserved.
<div class="float-right d-none d-sm-inline-block">
<b>Version</b> 0.1.0
</div>
</footer>
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
<script src="index.js"></script>
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
</body>
</html>

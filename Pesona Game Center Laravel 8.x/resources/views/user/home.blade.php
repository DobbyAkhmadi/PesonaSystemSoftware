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
            <li class="breadcrumb-item active">Menu Utama</li>

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
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">
        <i class="fas fa-calendar-check"></i>
         Game Eksklusif Dari Sony Playstation 5 Terbaru !
      </h3>
            </div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
             <div id="demo" class="carousel slide" data-ride="carousel">
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
              </ul>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../assets/img/ps5/fifa21.jpg" alt="Los Angeles" width="500" height="500">
                  <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../assets/img/ps5/gow.jpg" alt="Chicago" width="500" height="500">
                  <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../assets/img/ps5/spider.jpg" alt="New York" width="500" height="500">
                  <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../assets/img/ps5/ac.jpg" alt="New York" width="500" height="500">
                  <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../assets/img/ps5/demon.jpg" alt="New York" width="500" height="500">
                  <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>




      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">
        <i class="fas fa-calendar-check"></i>
         Jadwal Hari ini!
      </h3>

          </div>
          <div class="card-body">
            <div class="card card-primary card-outline">
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Playstation</th>
                        <th>Status</th>
                        <th>Total/Jam</th>
                        <th>Paket</th>
                        <th>Jadwal</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><strong>S01-PS5</strong></td>
                        <td>Surya</td>
                        <td><span class="badge badge-info">Playstation 5</span></td>
                        <td><span class="badge badge-success">Normal</span></td>
                        <td> <small class="badge badge-primary"><i class="far fa-clock"></i> 4 Jam</small></td>

                        <td><span class="badge badge-success">Normal</span></td>
                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-xl">Tampilkan</button></td>

                      </tr>
                      <tr>
                        <td><strong>S02-PS5</strong></td>
                        <td>-</td>
                        <td><span class="badge badge-info">Playstation 5</span></td>
                        <td><span class="badge badge-warning">Pemeliharan</span></td>


                        <td> <small class="badge badge-danger"><i class="far fa-clock"></i> X Jam</small></td>

                        <td><span class="badge badge-danger">Tidak Tersedia</span></td>
                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-xl">Tampilkan</button></td>
                      </tr>
                      <tr>
                        <td><strong>S03-PS5</strong></td>
                        <td>Dhany</td>
                        <td><span class="badge badge-info">Playstation 5</span></td>
                        <td><span class="badge badge-success">Normal</span></td>
                        <td> <small class="badge badge-primary"><i class="far fa-clock"></i> 4 Jam</small></td>

                        <td><span class="badge badge-success">Normal</span></td>
                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-xl">Tampilkan</button></td>
                      </tr>
                      <tr>
                        <td><strong>S04-PS5</strong></td>
                        <td>Khintal Minjay</td>
                        <td><span class="badge badge-info">Playstation 5</span></td>
                        <td><span class="badge badge-success">Normal</span></td>
                        <td> <small class="badge badge-primary"><i class="far fa-clock"></i> 4 Jam</small></td>
                        <td><span class="badge badge-success">Normal</span></td>
                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-xl">Tampilkan</button></td>
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
<script src="{{asset('index.js')}}"></script>
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
</body>
</html>

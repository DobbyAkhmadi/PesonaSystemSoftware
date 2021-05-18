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
            <li class="breadcrumb-item active">Main Menu</li>

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
              <!-- Information From Admin -->
        @include('layouts.information')
          <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">
        <i class="fas fa-calendar-check"></i>
        New Game Exclusive from Sony Playstation 5 !

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
                Today Schedule !
        </h3>

        </div>
        <div class="card-body">
            <div class="card card-primary card-outline">
            <div class="card-body p-0">
                <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                    <tr>
                        <th scope="col">Client No</th>
                        <th scope="col">Member Name</th>
                        <th scope="col">Console</th>
                        <th scope="col">Package</th>
                        <th scope="col">Start Play</th>
                        <th scope="col">End Play</th>
                        <th scope="col">Hours Play</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                        <td scope="row"><strong>{{ $row->seatno }}</strong></td>
                        <td scope="row">{{ $row->name }}</td>
                        <td scope="row"><span class="badge badge-info">{{ $row->devicename }}</span></td>
                        <td scope="row"><span class="badge badge-success">{{ $row->packagename }}</span></td>
                        <td scope="row"><small class="badge badge-primary"><i class="far fa-clock"></i> {{ date_format(date_create($row->start), 'h:i A') }}</small> </td>
                        <td scope="row"><small class="badge badge-primary"><i class="far fa-clock"></i> {{ date_format(date_create($row->end), 'h:i A')}}</small> </td>
                        <td scope="row"><small class="badge badge-primary"><i class="far fa-clock"></i> {{ $row->hours }} Hours</small></td>
                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-xl">Show</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
                </div>
            </div>
            </div>
        </div>
        {!! QrCode::generate('Make me into a QrCode!');  !!}
        </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!--/. container-fluid -->

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

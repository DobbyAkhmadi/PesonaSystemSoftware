<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pesona Game Center | My Profile</title>
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
    }
  </style>

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
              <li class="breadcrumb-item active">My Profile</li>

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
          <div class="col-md-4">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
         <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">
        <i class="fas fa-id-card"></i>
        My Profile
      </h3>
          </div>
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle" src="{{asset(Auth::user()->image)}}" alt="User profile picture">
              {{-- <img class="profile-user-img img-fluid img-circle" src="{{asset('assets/img/User/user7-128x128.jpg')}}" alt="User profile picture"> --}}
            </div>

            <h3 class="profile-username text-center"> {{ Auth::user()->name }}</h3>

            <p class="text-muted text-center">Member <strong>{{ Auth::user()->status }}</strong></p>
            <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
              </div>

            <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>IdentityID</b> <a class="float-right">{{ Auth::user()->identityid }}</a>
                  </li>
              <li class="list-group-item">
                <b>No Member</b> <a class="float-right">{{ Auth::user()->nomember }}</a>
              </li>
              <li class="list-group-item">
                <b>Email</b> <a class="float-right"> {{ Auth::user()->email }}</a>
              </li>
              <li class="list-group-item">
                <b>Member Since</b> <a class="float-right">{{ date_format(date_create(Auth::user()->created_at), ' M y') }}</a>
              </li>
              <li class="list-group-item">
                <b>Phone</b> <a class="float-right">{{ Auth::user()->phone }}</a>
              </li>
              <li class="list-group-item">
                <b>Member</b> <a class="float-right">{{ Auth::user()->status }}</a>
              </li>

            </ul>

          </div>
          <!-- /.card-body -->
        </div>
      </div>
      <!-- /.card -->


    </div>
    <div class="col-md-8">
      <div class="card card-primary">
        <div class="card-header">
         <h3 class="card-title">
        <i class="fas fa-edit"></i>
        Modify My Profile
      </h3>
        </div>
        <div class="card-body">

            <div class="card card-primary">

        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
            <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">IdentityID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Input ...">
                    </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">FullName</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Input ...">
                </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" rows="3" placeholder="Input ..."></textarea>
            </div>
    </div>
    <div class="form-group row">


        <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" inputmode="text">
            <div class="alert alert-warning alert-dismissible">
                <h5><i class="icon fas fa-exclamation-triangle"></i> Warning!</h5>
                This Phone Number Will be use for Verification Admin!
            </div>
        </div>

</div>



            <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
            </div>





        </div>

    </div>
    </div></form>

    <!-- /.col -->

</div>

<!-- /.row -->
</div><!--/. container-fluid -->

</div></div>




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
<!-- InputMask -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard2.js')}}"></script>
<script src="{{asset('index.js')}}"></script>
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
</body>
</html>

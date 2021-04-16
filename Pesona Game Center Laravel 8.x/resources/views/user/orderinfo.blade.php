<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pesona Game Center | Message Order</title>
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

  <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/dropzone/min/dropzone.min.css')}}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
                <li class="breadcrumb-item active">Pesanan</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">


        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-envelope"></i>
                Transaksi Pemesanan
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
                          <th>Tanggal</th>
                          <th>Paket</th>
                          <th>Pembayaran</th>
                          <th>Jatuh Tempo</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><strong>S02-PS5-0721-02</strong></td>
                          <td>02-Jun-2021</td>
                          <td><span class="badge badge-success">Paket Ramadhan</span></td>
                          <td><span class="badge badge-success">Menunggu Pembayaran</span></td>
                          <td><span class="badge badge-danger">1 Jam</span></td>

                          <td class="project-actions text-green">
                            <a class="btn btn-primary btn-file" data-toggle="modal" data-target="#modal-lg">
                              <i class="fas fa-folder">
                              </i>
                              Detail
                            </a>
                            <a class="btn btn-primary btn-danger" data-toggle="modal" data-target="#modal-sm">
                              <i class="fas fa-trash">
                              </i>
                              Hapus
                            </a>
                          </td>



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


      </section>

      <!-- /.modal-dialog Batal-->
      <div class="modal fade" id="modal-sm">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><strong>No Transaksi : S1-PS5-0721-002</strong></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <h3 class="card-title "><strong>Hapus Transaksi ini kak?</strong></h3>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger swalDefaultBatal" data-dismiss="modal">Ya!</button>

              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <div class="modal-body">
              <div class="col-md-12">

                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">
                      <i class="fas fa-envelope-open"></i>
                      <strong>Detail Transaksi | S1-PS5-0721-002</strong>
                    </h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <dl class="row">
                      <dt class="col-sm-4">Tanggal</dt>
                      <dd class="col-sm-8">02-Jun-2021,03:45 WIB</dd>
                      <dt class="col-sm-4">Pembayaran</dt>
                      <dd class="col-sm-8">All In ONE Qiris Payment.</dd>
                      <dd class="col-sm-8 offset-sm-4"><img class="animation__wobble"
                          src="{{asset('assets/img/Pay/template.png')}}" alt="Pesona Game Center" height="200" width="200"></dd>
                      <dd class="col-sm-8 offset-sm-4">Scan aku kak :) </dd>
                      <dt class="col-sm-4">Promo</dt>
                      <dd class="col-sm-8"><strong>[DOBYCUTE]</strong></dd>
                      <dt class="col-sm-4"></dt>
                      <dd class="col-sm-8">Promo ini hanya berlangsung pada 01-jun-2021,00:00 WIB Sampai
                        29-jun-2021,00:00
                        WIB
                      </dd>
                      <dt class="col-sm-4">Status</dt>
                      <dd class="col-sm-8"><span class="badge badge-success">Menunggu Pembayaran</span></dd>
                    </dl>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

              </div>
              <div class="col-md-12">
                <div class="card card-primary">

                  <div class="card-header">
                    <h4 class="card-title"> <i class="fas fa-edit"></i>
                      Detail Pesanan Kak Ujang Nyai !</h4>
                  </div>
                  <div class="card-body">
                    <div class="card card-primary card-outline">
                      <div class="card-body p-0">
                        <div class="table-responsive">
                          <table id="detail" class="table">
                            <thead>
                              <tr>
                                <th>Unit/Paket</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><span class="badge badge-light">[PS5] Normal</span></td>
                                <td><span class="badge badge-light">Rp.50.000</span></td>
                                <td><span class="badge badge-light">1</span></td>
                                <td><span class="badge badge-light">Rp.50.000</span></td>

                              </tr>
                              <tr>
                                <td><span class="badge badge-light">[Minuman]Teh Botol</span></td>
                                <td><span class="badge badge-light">Rp.7.000</span></td>
                                <td><span class="badge badge-light">2</span></td>
                                <td><span class="badge badge-light">Rp.7.000</span></td>

                              </tr>


                              <tr>
                                <td></td>
                                <td></td>
                                <td>Total[SUM]</td>
                                <td><span class="badge badge-light">Rp.60.000</span></td>
                                <td></td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="modal-footer text-right">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                          </div>
                        </div>
                        <!-- /.table-responsive -->
                      </div>
                    </div>
                  </div>
                </div>


              </div>
            </div>

          </div>

          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>




    </div>

    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
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
  <script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('dist/js/demo.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{asset('dist/js/pages/dashboard2.js')}}"></script>
  <script src="{{asset('index.js')}}"></script>

  <script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
  <script>
    $(function () {
      var Toast = Swal.mixin({
        toast: true,
        position: 'bottomRight',
        showConfirmButton: false,
        timer: 3000
      });

      $('.swalDefaultSuccess').click(function () {
        Toast.fire({
          icon: 'success',
          title: ' Unggah Foto berhasil kak :) Tunggu ya kami verifikasi dulu !'
        })
      });

      $('.swalDefaultBatal').click(function () {
        Toast.fire({
          icon: 'success',
          title: ' Pesanan nya Berhasil dibatalkan kak :) !'
        })
      });


      $('.swalDefaultInfo').click(function () {
        Toast.fire({
          icon: 'info',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultError').click(function () {
        Toast.fire({
          icon: 'error',
          title: ' Pesanan nya Berhasil dibatalkan.'
        })
      });
      $('.swalDefaultWarning').click(function () {
        Toast.fire({
          icon: 'warning',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultQuestion').click(function () {
        Toast.fire({
          icon: 'question',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });

      $('.toastrDefaultSuccess').click(function () {
        toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultInfo').click(function () {
        toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultError').click(function () {
        toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultWarning').click(function () {
        toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });

      $('.toastsDefaultDefault').click(function () {
        $(document).Toasts('create', {
          title: 'Toast Title',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultTopLeft').click(function () {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'topLeft',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultBottomRight').click(function () {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'bottomRight',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultBottomLeft').click(function () {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'bottomLeft',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultAutohide').click(function () {
        $(document).Toasts('create', {
          title: 'Toast Title',
          autohide: true,
          delay: 750,
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultNotFixed').click(function () {
        $(document).Toasts('create', {
          title: 'Toast Title',
          fixed: false,
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultFull').click(function () {
        $(document).Toasts('create', {
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          icon: 'fas fa-envelope fa-lg',
        })
      });
      $('.toastsDefaultFullImage').click(function () {
        $(document).Toasts('create', {
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          image: '../../dist/img/user3-128x128.jpg',
          imageAlt: 'User Picture',
        })
      });
      $('.toastsDefaultSuccess').click(function () {
        $(document).Toasts('create', {
          class: 'bg-success',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultInfo').click(function () {
        $(document).Toasts('create', {
          class: 'bg-info',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultWarning').click(function () {
        $(document).Toasts('create', {
          class: 'bg-warning',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultDanger').click(function () {
        $(document).Toasts('create', {
          class: 'bg-danger',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultMaroon').click(function () {
        $(document).Toasts('create', {
          class: 'bg-maroon',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
    });
  </script>
</body>

</html>

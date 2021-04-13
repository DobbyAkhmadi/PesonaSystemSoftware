<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pesona Game Center | Dashboard</title>
  <link href="../assets/img/favicon.png" rel="icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../dist/css/style.css">

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
            <li class="breadcrumb-item active">Menu Utama</li>

          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-12 col-sm-12">
          <div class="card card-primary card-tabs">
            <div class="card-header p-0 pt-1">
              <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                <li class="pt-2 px-3"><h3 class="card-title"><strong>Yuk Pesan Sekarang !</strong></h3></li>

                <li class="nav-item">
                  <a class="nav-link active" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Menu Makanan Nih !</a>
                </li>

                <li class="nav-item">
                 <a class="nav-link " id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Pesanan</a>
               </li>


             </ul>
           </div>

           <div class="tab-content" id="custom-tabs-two-tabContent">
            <div class="tab-pane fade" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
              <div class="card-header">
                <h4 class="card-title"> <i class="fas fa-edit"></i>
                Pilih Pesanan Kamu !</h4>
              </div>
              <div class="card-body">

               <label>Pilih Playstation</label>

               <select id="hour" onchange="hourChange(this);" class="form-control custom-select">

                <option>Pilih</option>
                <option>PS4 PRO</option>
                <option>PS5</option>
              </select>

              <label for="inputClientCompany1">Paket</label>
              <input type="text" id="inputClientCompany1" class="form-control" disabled="">

              <label for="inputDescription">Informasi Paket</label>
              <textarea id="inputDescription" class="form-control" rows="4" disabled=""></textarea>
              <label for="inputClientCompany">Harga</label>
              <input type="text" id="inputClientCompany" class="form-control" disabled="">

            </div>
            <div class="card-footer">
              <button type="submit" id="addRow" class="btn btn-primary">Tambah Pesanan</button>
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
                Launch Large Modal
              </button>



            </div>




          </div>
          <div class="tab-pane fade active show" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
           <div class="card-header">
            <h4 class="card-title"> <i class="fas fa-edit"></i>
            Pilih Pesanan Kamu !</h4>
          </div>
          <div class="card-body">

            <div>
              <div class="btn-group w-100 mb-2">
                <a class="btn btn-primary fas fa-edit active" href="javascript:void(0)" data-filter="all"> Makanan/Minuman </a>

                <a class="btn btn-primary fas fa-edit " href="javascript:void(0)" data-filter="1"> Makanan </a>

                <a class="btn btn-primary fas fa-edit" href="javascript:void(0)" data-filter="2"> Minuman </a>

              </div>

            </div>
            <div>
              <div class="filter-container p-0 row" style="padding: 3px; position: relative; width: 100%; display: flex; flex-wrap: wrap; height: 515px;">
                <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample" style="opacity: 1; transform: scale(1) translate3d(0px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 193.4px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
                  <a href="../assets/img/Food/pop.jpg" data-toggle="lightbox" data-title="Pop Mie Rasa Ayam">
                    <img src="../assets/img/Food/pop.jpg?text=1" class="img-fluid mb-2" alt="white sample">
                  </a>
                </div>
                <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample" style="opacity: 1; transform: scale(1) translate3d(196px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 193.4px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
                  <a href="../assets/img/Drink/tehbotol.jpg?text=2" data-toggle="lightbox" data-title="Teh Botol Sosro Premium">
                    <img src="../assets/img/Drink/tehbotol.jpg" class="img-fluid mb-2" alt="black sample">
                  </a>
                </div>
                <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample" style="opacity: 1; transform: scale(1) translate3d(392px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 193.4px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
                  <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red">
                    <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3" class="img-fluid mb-2" alt="red sample">
                  </a>
                </div>
                <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample" style="opacity: 1; transform: scale(1) translate3d(588px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 193.4px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
                  <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red">
                    <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4" class="img-fluid mb-2" alt="red sample">
                  </a>
                </div>
                <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample" style="opacity: 1; transform: scale(1) translate3d(784px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 193.4px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
                  <a href="../assets/img/Drink/fruitea.jpg?text=5" data-toggle="lightbox" data-title="sample 5 - black">
                    <img src="../assets/img/Drink/fruitea.jpg?text=5" class="img-fluid mb-2" alt="black sample">
                  </a>
                </div>
                <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample" style="opacity: 1; transform: scale(1) translate3d(980px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 193.4px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
                  <a href="https://via.placeholder.com/1200/FFFFFF.png?text=6" data-toggle="lightbox" data-title="sample 6 - white">
                    <img src="https://via.placeholder.com/300/FFFFFF?text=6" class="img-fluid mb-2" alt="white sample">
                  </a>
                </div>
                <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample" style="opacity: 1; transform: scale(1) translate3d(0px, 189px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 193.4px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
                  <a href="https://via.placeholder.com/1200/FFFFFF.png?text=7" data-toggle="lightbox" data-title="sample 7 - white">
                    <img src="https://via.placeholder.com/300/FFFFFF?text=7" class="img-fluid mb-2" alt="white sample">
                  </a>
                </div>
                <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample" style="opacity: 1; transform: scale(1) translate3d(196px, 189px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 193.4px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
                  <a href="https://via.placeholder.com/1200/000000.png?text=8" data-toggle="lightbox" data-title="sample 8 - black">
                    <img src="https://via.placeholder.com/300/000000?text=8" class="img-fluid mb-2" alt="black sample">
                  </a>
                </div>
                <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample" style="opacity: 1; transform: scale(1) translate3d(392px, 189px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 193.4px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
                  <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red">
                    <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample">
                  </a>
                </div>
                <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample" style="opacity: 1; transform: scale(1) translate3d(588px, 189px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 193.4px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
                  <a href="https://via.placeholder.com/1200/FFFFFF.png?text=10" data-toggle="lightbox" data-title="sample 10 - white">
                    <img src="https://via.placeholder.com/300/FFFFFF?text=10" class="img-fluid mb-2" alt="white sample">
                  </a>
                </div>
                <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample" style="opacity: 1; transform: scale(1) translate3d(784px, 189px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 193.4px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
                  <a href="https://via.placeholder.com/1200/FFFFFF.png?text=11" data-toggle="lightbox" data-title="sample 11 - white">
                    <img src="https://via.placeholder.com/300/FFFFFF?text=11" class="img-fluid mb-2" alt="white sample">
                  </a>
                </div>
                <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample" style="opacity: 1; transform: scale(1) translate3d(980px, 189px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 193.4px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
                  <a href="https://via.placeholder.com/1200/000000.png?text=12" data-toggle="lightbox" data-title="sample 12 - black">
                    <img src="https://via.placeholder.com/300/000000?text=12" class="img-fluid mb-2" alt="black sample">
                  </a>
                </div>
              </div>


            </div>
          </div>


        </div>

      </div>
      <!-- /.card -->
    </div>

  </div>

  <div class="col-md-12">
    <div class="card card-primary">

      <div class="card-header">
        <h4 class="card-title"> <i class="fas fa-edit"></i>
        Detail Pesanan Kamu !</h4>
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
                    <th>Total Transaksi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><span class="badge badge-light">[PS5] Normal</span></td>
                    <td><span class="badge badge-light">Rp.50.000</span></td>
                    <td><span class="badge badge-light">1</span></td>
                    <td><span class="badge badge-light">Rp.50.000</span></td>
                    <td class="project-actions text-green">

                      <a class="btn btn-primary btn-danger" data-toggle="modal" data-target="#modal-sm">
                        <i class="fas fa-trash">
                        </i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td><span class="badge badge-light">[Minuman]Teh Botol</span></td>
                    <td><span class="badge badge-light">Rp.7.000</span></td>
                    <td><span class="badge badge-light">2</span></td>
                    <td><span class="badge badge-light">Rp.7.000</span></td>
                    <td class="project-actions text-green">

                      <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>


                  <tr>

                    <td></td>
                    <td></td>

                    <td>Total[SUM]</td>
                    <td><span class="badge badge-success">Rp.60.000</span></td>
                    <td></td>
                  </tr>



                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Konfirmasi Pesanan</button>
      </div>

    </div>


  </div>



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
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- PAGE PLUGINS -->

<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script src="../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<script src="../plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>
<script src="index.js"></script>
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })


</script>
<script type="text/javascript">
 function hourChange(selectObj) {
   var selectIndex=selectObj.selectedIndex;
   var selectValue=selectObj.options[selectIndex].text;
   var output=document.getElementById("output");
   //alert(output.innerText);
   output.innerHTML=selectValue;
 }


</script>

<script type="text/javascript">
  $(function () {
  $("#addRow").click(function () {
    var row = $("<tr><td>Teh Botol Sosro</td><td>Rp.17.000</td><td>2</td><td>Rp.17.000</td><td>X</td></tr>");
    $("#detail > tbody").append(row);
  });
});
</script>

</body>
</html>

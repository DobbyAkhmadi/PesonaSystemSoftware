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
  <link rel="stylesheet" href="{{asset('plugins/flag-icon-css/css/flag-icon.min.css')}}">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{asset('dist/css/style.css')}}">

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
            <li class="breadcrumb-item active">Main Menu</li>

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
        <!-- Information From Admin -->
        @include('layouts.information')

          <div class="card card-primary card-tabs">
            <div class="card-header p-0 pt-1">
              <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                <li class="pt-2 px-3"><h3 class="card-title"><strong>Package and Food Order!</strong></h3></li>

                <li class="nav-item">
                  <a class="nav-link active" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Food Menu</a>
                </li>

                <li class="nav-item">
                 <a class="nav-link " id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Order Package</a>
               </li>


             </ul>
           </div>

        <div class="tab-content" id="custom-tabs-two-tabContent">
            <div class="tab-pane fade" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
            <div class="card-body">
            <label>Choose Console Package</label>
            <select id="hour" onchange="hourChange(this);" class="form-control custom-select">
                <option>Choose</option>
                <option>PS4 PRO</option>
                <option>PS5</option>
            </select>
            <label for="inputClientCompany1">Package</label>
            <input type="text" id="inputClientCompany1" class="form-control" disabled="">
            <label for="inputDescription">Descriptions</label>
            <textarea id="inputDescription" class="form-control" rows="4" disabled=""></textarea>
            <label for="inputClientCompany">Price</label>
            <input type="text" id="inputClientCompany" class="form-control" disabled="">
            </div>
            <div class="card-footer">
            <button type="submit" id="addRow" class="btn btn-primary">Add Package</button>
            </div>
        </div>
        <div class="tab-pane fade active show" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">

        <div class="card-body">
            <div>
            <div class="btn-group w-100 mb-2">
                <a class="btn btn-primary fas fa-edit active" href="javascript:void(0)" data-filter="all"> All Items </a>
                <a class="btn btn-primary fas fa-edit " href="javascript:void(0)" data-filter="1"> Food </a>
                <a class="btn btn-primary fas fa-edit" href="javascript:void(0)" data-filter="2"> Drinks </a>
            </div>
            </div>
            <div>
            <div class="filter-container p-0 row" style="padding: 3px; position: relative; width: 100%; display: flex; flex-wrap: wrap; height: 515px;">
                @foreach ($foods as $row )
                    @if ($row->type=='Food')
                        <div class="filtr-item col-sm-2" data-category="1" data-sort="black sample" style="opacity: 1; transform: scale(1) translate3d(0px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 193.4px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
                            <a href="{{ asset('assets/img/Food/'. $row->image)}}"
                                data-toggle="lightbox"
                                data-title="{{$row->foodname}}">
                                <img src="{{ asset('assets/img/Food/'. $row->image)}}" class="img-fluid mb-2" alt="white sample">
                            </a>
                            <div class="btn btn-primary  ">
                                <i class="fas fa-cart-plus "></i>
                                Add
                            </div>
                        </div>
                    @elseif ($row->type=='Drink')
                        <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="white sample" style="opacity: 1; transform: scale(1) translate3d(0px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 193.4px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
                            <a href="{{ asset('assets/img/Food/'. $row->image)}}"
                                data-toggle="lightbox"
                                data-title="{{$row->foodname}}">
                                <img src="{{ asset('assets/img/Food/'. $row->image)}}" class="img-fluid mb-2" alt="white sample">
                            </a>
                            <div class="btn btn-primary  ">
                                <i class="fas fa-cart-plus "></i>
                                Add
                            </div>
                        </div>
                    @endif
                @endforeach
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
        Detail Order</h4>
      </div>
      <div class="card-body">
        <div class="card card-primary card-outline">
          <div class="card-body p-0">
            <div class="table-responsive">
              <table id="detail" class="table">
                <thead>
                  <tr>
                    <th>Foods/Package</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>SubTotal</th>
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

                      <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                    </td>
                  </tr>
                  <tr>
                    <td><span class="badge badge-light">[Minuman]Teh Botol</span></td>
                    <td><span class="badge badge-light">Rp.7.000</span></td>
                    <td><span class="badge badge-light">2</span></td>
                    <td><span class="badge badge-light">Rp.7.000</span></td>
                    <td class="project-actions text-green">

                      <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
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
        <button type="submit" class="btn btn-primary">Confirm Order</button>
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

<!-- DataTables  & Plugins -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script src="{{asset('plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>
<script src="{{asset('plugins/filterizr/jquery.filterizr.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard2.js')}}"></script>
<script src="{{asset('index.js')}}"></script>

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

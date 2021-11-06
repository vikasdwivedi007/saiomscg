<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>saiom scg</title>
   <link rel="icon" type="image/png" sizes="16x16" href="{{url('/')}}/assets2/saiom mockup.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('/')}}/assets2/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{url('/')}}/assets2/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{url('/')}}/assets2/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{url('/')}}/assets2/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('/')}}/assets2/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('/')}}/assets2/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{url('/')}}/assets2/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{url('/')}}/assets2/plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="{{url('/')}}/assets2/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('/')}}/assets2/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('/')}}/assets2/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <!-- jQuery -->
<script src="{{url('/')}}/assets2/plugins/jquery/jquery.min.js"></script>


 <link rel="stylesheet" href="{{url('/')}}/assets2/sweetalert2.min.css">
    <script src="{{url('/')}}/assets2/sweetalert2.common.min.js"></script>
    <script src="{{url('/')}}/assets2/sweetalert2.min.js"></script>
   
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{url('/')}}/assets2/saiom mockup.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
<!--       <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <button  data-toggle="modal" data-target="#exampleModal" class="btn btn-danger">Logout</button>
     
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
   <!-- use bootstrap 4  logout popup  -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #DC143C; color: white" >
        <h5 class="modal-title" id="exampleModalLabel">Logout From Saiom scg</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4><i>Are you sure you want to logout</i></h4>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        <div class="btn btn-danger" aria-labelledby="navbarDropdown">
           <a  style="color: white;"  href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
           {{ __('Logout') }}
           </a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
           </form>
        </div>
                    
      </div>
    </div>
  </div>
</div>
<!-- cloge -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}/home" class="brand-link">
      <img src="{{url('/')}}/assets2/saiom mockup.png" width="200px" height="70px"  alt="Logo" class="" style="opacity: .8">
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
         <!--  <img src="{{url('/')}}/assets2/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
          <a href="javascript:void(0)" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="{{url('/')}}/home" class="nav-link {{(url()->current() == url('/home')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="{{url('/admin-about')}}" class="nav-link {{(url()->current() == url('/admin-about')) ? 'active' : '' }}">
            <i class="fa fa-info-circle" aria-hidden="true"></i>
              <p>About Us</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/admin-services')}}" class="nav-link {{(url()->current() == url('/admin-services')) ? 'active' : '' }}">
             <i class="fa fa-wrench" aria-hidden="true"></i>
              <p>Services</p>
            </a>
          </li>

           <li class="nav-item">
            <a href="{{url('/admin-career')}}" class="nav-link {{(url()->current() == url('/admin-career')) ? 'active' : '' }}">
              <i class="fa fa-address-book" aria-hidden="true"></i>
              <p>Career</p>
            </a>
          </li>

           <li class="nav-item">
            <a href="{{url('/admin-client-review')}}" class="nav-link {{(url()->current() == url('/admin-client-review')) ? 'active' : '' }}">
              <i class="fa fa-user" aria-hidden="true"></i>
              <p>Client Review</p>
            </a>
          </li>

           <li class="nav-item">
            <a href="{{url('/admin-resume')}}" class="nav-link {{(url()->current() == url('/admin-resume')) ? 'active' : '' }}">
          <i class="fa fa-user" aria-hidden="true"></i>
              <p>Resume/cv</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/admin-contect')}}" class="nav-link {{(url()->current() == url('/admin-contect')) ? 'active' : '' }}">
          <i class="fa fa-user" aria-hidden="true"></i>
              <p>Contect Us Data</p>
            </a>
          </li>
       
         

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            @if(url()->current() == url('/home'))
            <h1 class="m-0"><b>Dashboard</b></h1>
             @elseif(url()->current() == url('/admin-about'))
              <h1 class="m-0"><b>About Us</b></h1>
            @elseif(url()->current() == url('/admin-services'))
              @elseif(url()->current() == url('/admin-career'))
             <h1 class="m-0"><b>Career</b></h1>
              @elseif(url()->current() == url('/admin-client-review'))
             <h1 class="m-0"><b>Client Review</b></h1>
              @elseif(url()->current() == url('/admin-resume'))
             <h1 class="m-0"><b>Resume/cv Listing</b></h1>
            @elseif(url()->current() == url('/admin-contect'))
             <h1 class="m-0"><b>Contect Us Data</b></h1>
            @endif

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}/home">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      @if(url()->current() == url('/home'))
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
          <?php $services = DB::table('services')->count();?>
               <h1>{{$services}}</h1>
                <p>Services</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{url('admin-services')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
            <?php $career = DB::table('careers')->count();?>
                <h3>{{$career}}<sup style="font-size: 20px"></sup></h3>
         
                <p>Career</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{url('admin-career')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
           <?php $resume = DB::table('client_review')->count();?>
                <h3>{{$resume}}</h3>

                <p>Clients Reviews</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{url('admin-client-review')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php $cv = DB::table('resume')->count();?>
                <h3>{{$cv}}</h3>

                <p>Resume/cv</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{url('admin-resume')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
         @endif
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
           @yield('content')
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021-2032 <a href="#">Saiom scg</a>.</strong>

  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery UI 1.11.4 -->
<script src="{{url('/')}}/assets2/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{url('/')}}/assets2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="{{url('/')}}/assets2/plugins/moment/moment.min.js"></script>
<script src="{{url('/')}}/assets2/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url('/')}}/assets2/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{url('/')}}/assets2/plugins/summernote/summernote-bs4.min.js"></script>

<!-- overlayScrollbars -->
<script src="{{url('/')}}/assets2/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('/')}}/assets2/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('/')}}/assets2/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="{{url('/')}}/assets2/dist/js/pages/dashboard.js"></script> -->
<script src="{{url('/')}}/assets2/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('/')}}/assets2/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{url('/')}}/assets2/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url('/')}}/assets2/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{url('/')}}/assets2/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{url('/')}}/assets2/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{url('/')}}/assets2/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{url('/')}}/assets2/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{url('/')}}/assets2/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- cloge -->
 <script type="text/javascript">
  
 </script> 
</body>
</html>

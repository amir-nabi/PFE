<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administration | FS Industrie</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->

  <style>
    hr.style-two {
    border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
}
  </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}"/>
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}"/>
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('admin/plugins/jqvmap/jqvmap.min.css')}}"/>
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}"/>
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}"/>
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('admin/plugins/daterangepicker/daterangepicker.css')}}"/>
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('admin/plugins/summernote/summernote-bs4.css')}}"/>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"/>
  @yield('cssjs')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav inline-block">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" href="{{route('adminprofile')}}" role="button"><i class="fas fa-home"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('adminprofile')}}" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Administration FS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/uploads/pictures/{{ Auth::user()->picture }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{route('adminprofile')}}" class="d-block">{{ucfirst(trans(Auth::user()->prenom))}} {{ucfirst(trans(Auth::user()->nom))}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-book"></i>
              <p>
                Offres
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">4</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('affichelisteoffres')}}" class="nav-link">
                  <i class="fas fa-list"></i>
                  <p>Tous les offres</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('affichelisteoffres1')}}" class="nav-link">
                  <i class="far fa fa-bolt"></i>
                  <p>ECLA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('affichelisteoffres2')}}" class="nav-link">
                  <i class="far fa fa-fire-extinguisher"></i>
                  <p>ITMP</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('affichelisteoffres3')}}" class="nav-link">
                  <i class="fa fa-shopping-bag"></i>
                  <p>TTF</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{route('afficher_fournisseur')}}" class="nav-link">
              <i class="fa fa-users" aria-hidden="true"></i>
              <p>
                Fournisseurs
                <i class="right fas"></i>
              </p>
            </a>
          <hr class="style-two">
          <li class="nav-item">
            <form action="{{route('deconnecter')}}">
            <button type="submit" class="btn btn-danger" style="margin-left:33px;width:70%">Déconnexion <i class="fa fa-sign-out"></i></button>
            </form>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
          <div class="row">
            @yield('contenu')
          </div>
      </div>
      </section>
  </div>
  

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>

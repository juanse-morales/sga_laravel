<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
  <title>@yield('title','layout') | SGT</title>
  <!-- Bootstrap Core CSS -->
  <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Menu CSS -->
  <link href="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
  <!-- animation CSS -->
  <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <!-- color CSS -->
  <link href="{{ asset('css/colors/default.css') }}" id="theme" rel="stylesheet">
</head>

<body class="fix-header">
  <!-- ============================================================== -->
  <!-- Preloader -->
  <!-- ============================================================== -->
  <div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
    </svg>
  </div>
  <!-- ============================================================== -->
  <!-- Wrapper -->
  <!-- ============================================================== -->
  <div id="wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
      <div class="navbar-header">
        <div class="top-left-part">
          <!-- Logo -->
          <a class="logo" href="index.html">
            <!-- Logo icon image, you can use font-icon also -->
            <b>
              <!--This is dark logo icon-->
              <img src="{{ asset('plugins/images/admin-logo.png') }}" alt="home" class="dark-logo" />
              <!--This is light logo icon-->
              <img src="{{ asset('plugins/images/admin-logo-dark.png') }}" alt="home" class="light-logo" />
            </b>
            <!-- Logo text image you can use text also -->
            <span class="hidden-xs">
              <!--This is dark logo text-->
              <img src="{{ asset('plugins/images/admin-text.png') }}" alt="home" class="dark-logo" />
              <!--This is light logo text-->
              <img src="{{ asset('plugins/images/admin-text-dark.png') }}" alt="home" class="light-logo" />
            </span> 
          </a>
        </div>
        <!-- /Logo -->
        <ul class="nav navbar-top-links navbar-right pull-right">
          <li>
            <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
              <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> 
            </form>
          </li>
          <li>
            <a class="profile-pic" href="#"> <img src="{{ asset('plugins/images/users/varun.jpg') }}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">John Arrieta</b></a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-header -->
      <!-- /.navbar-top-links -->
      <!-- /.navbar-static-side -->
    </nav>
    <!-- End Top Navigation -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <div class="navbar-default sidebar" role="navigation">
      <div class="sidebar-nav slimscrollsidebar">
        <div class="sidebar-head">
          <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
        </div>
        <ul class="nav" id="side-menu">
          <li style="padding: 70px 0 0;">
            <a href="{{ route('acudiente.asistencia') }}" class="waves-effect"><i class="fa fa-home fa-fw" aria-hidden="true"></i>Home</a>
          </li>
          <li>
            <a href="{{ route('tareas.index2') }}" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Tareas</a>
          </li>
          <li>
            <a href="{{ route('home') }}" class="waves-effect"><i class="fa fa-power-off fa-fw" aria-hidden="true"></i>Salir</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Left Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    
    
    @yield('content')
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->
    <!-- /.container-fluid -->
    <footer class="footer text-center"> &copy; 2019 Sistema Gestor de Asistencias </footer>
  </div>
  <!-- /#wrapper -->
  <!-- jQuery -->
  <script src="{{ asset('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <!-- Menu Plugin JavaScript -->
  <script src="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
  <!--slimscroll JavaScript -->
  <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
  <!--Wave Effects -->
  <script src="{{ asset('js/waves.js') }}"></script>
  <!-- Custom Theme JavaScript -->
  <script src="{{ asset('js/custom.min.js') }}"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- <link href="" rel="icon"> -->
  <title>Dashboard</title>
  <link href='{{asset("dashboard/vendor/fontawesome-free/css/all.min.css")}}' rel="stylesheet" type="text/css">
  <link href='{{asset("dashboard/vendor/bootstrap/css/bootstrap.min.css" )}}'rel="stylesheet" type="text/css">
  <link href="{{asset('dashboard/css/ruang-admin.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <!-- <img src="dashboard/img/girl.png"> -->
        </div>
        <div class="sidebar-brand-text mx-3"> {{strtoupper(Auth::user()->role)}}</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">

      <li class="nav-item active">
        <a class="nav-link" href="{{ route('users.index' )}}">
          <span>Users</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="{{ route('abouts.index' )}}">
          <span>Abouts</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="{{ route('skills.index' )}}">
          <span>Skills</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="{{ route('experiences.index' )}}">
          <span>Experiences</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="{{ route('education.index' )}}">
          <span>Educations</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="{{ route('webinars.index' )}}">
          <span>Webinars</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="{{ route('blogs.index' )}}">
          <span>Blogs</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('contact.index' )}}">
          <span>Contacts</span></a>
      </li>
    </ul>

    <!-- Sidebar -->
    @include('layouts.logout_modal');
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
                      aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="dashboard/img/girl.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">{{strtoupper(Auth::User()->name)}}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <!-- <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a> -->
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logout_modal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                    </a>
              </div>
            </li>
        </nav>
        <div class="container-fluid">
          @yield('table')
          </div>
        </div>
        <!---Container Fluid-->
      </div>
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src='{{asset("dashboard/vendor/jquery/jquery.min.js")}}'></script>
  <script src='{{asset("dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js")}}'></script>
  <script src='{{asset("dashboard/vendor/jquery-easing/jquery.easing.min.js")}}'></script>
  <script src='{{asset("dashboard/js/ruang-admin.min.js")}}'></script>
  <script src='{{asset("dashboard/vendor/chart.js/Chart.min.js")}}'></script>
  <script src='{{asset("dashboard/js/demo/chart-area-demo.js")}}'></script>  
</body>

</html>
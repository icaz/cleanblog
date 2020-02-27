<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Kontrolna tabla</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Page specific style -->

  @yield('style')
  
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        

      <a href="{{ route('welcome') }}" class="nav-link">Nazad na sajt!</a>
      </li>


{{--       <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('kontakti') }}" class="nav-link {{Request::is('kontakti') ? 'active' : ''}}">Kontakti</a>
      </li>
 --}}    


    </ul>


    <ul class="navbar-nav ml-auto">
        <li class="breadcrumb-item"><a href="#">Početna</a></li>
        <li class="breadcrumb-item active">Info</li>
</ul>


    <!-- SEARCH FORM
*****************************************************************************
*****************************************************************************
*****************************************************************************
Request::path() === '/' ? 'current_page_item' : '' 
*****************************************************************************

Request::is('dash*') ? 'active' : ''

*****************************************************************************
*****************************************************************************
*****************************************************************************
*****************************************************************************
*****************************************************************************

    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
***************************************************************************** -->


    <!-- Right navbar links 

    ***************************************************************************** 
        
    CUT INTO admin/deleted/del_right_nav.php

-->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
      <img src="{{ asset('user/img/core-img/logo-s2.png')}}" alt="Logo" class="brand-image img-square elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-bold">u.nisu.rs</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin/dist/img/avatar-icon-png.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Kao Neki Lik</a>
        </div>
      </div>
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{ route('post.index') }}" class="nav-link {{Request::is('dashboard/post*') ? 'active' : ''}}">
                  <i class="nav-icon fas fa-blog"></i>
                  <p>Blog</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{ route('category.index') }}" class="nav-link {{Request::is('dashboard/category*') ? 'active' : ''}}">
                  <i class="nav-icon fas fa-sitemap text-danger"></i>
                  <p>Kategorije</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('tag.index') }}" class="nav-link {{Request::is('dashboard/tag*') ? 'active' : ''}}">
                  <i class="nav-icon fas fa-hashtag text-warning"></i>
                  <p>Tagovi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link {{Request::is('dashboard/user*') ? 'active' : ''}}">
                  <i class="nav-icon fas fa-users text-info"></i>
                  <p>Korisnici</p>
                </a>
              </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  @yield('content')
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- Custom js -->
@yield('js')
</body>
</html>

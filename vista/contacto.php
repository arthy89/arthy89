<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ESCALAFÓN | CONTACTOS</title>
  <link rel="shortcut icon" href="https://escalafon-ayni.minedu.gob.pe/minedu.ico">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plantilla/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../plantilla/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="../../index3.html" class="navbar-brand">
        <img src="../plantilla/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index.php" class="nav-link">Inicio</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">contacto</a>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Opciones</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="#" class="dropdown-item">Some action </a></li>
              <li><a href="#" class="dropdown-item">Some other action</a></li>

              <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                  </li>

                  <!-- Level three dropdown-->
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                  <!-- End Level three -->

                  <li><a href="#" class="dropdown-item">level 2</a></li>
                  <li><a href="#" class="dropdown-item">level 2</a></li>
                </ul>
              </li>
              <!-- End Level two -->
            </ul>
          </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-0 ml-md-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../plantilla/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../plantilla/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../plantilla/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 1416.4px;">

<section class="content-header">
<div class="container">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Contacts</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Contacts</li>
</ol>
</div>
</div>
</div>
</section>

<section class="content">
    <div class="container">
    <div class="card card-solid">
<div class="card-body pb-0">
<div class="row">
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
Digital Strategist
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-7">
<h2 class="lead"><b>Nicole Pearson</b></h2>
<p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
</ul>
</div>
<div class="col-5 text-center">
<img src="../plantilla/dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
<a href="#" class="btn btn-sm bg-teal">
<i class="fas fa-comments"></i>
</a>
<a href="#" class="btn btn-sm btn-primary">
<i class="fas fa-user"></i> View Profile
</a>
</div>
</div>
</div>
</div>
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
Digital Strategist
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-7">
<h2 class="lead"><b>Nicole Pearson</b></h2>
<p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
</ul>
</div>
<div class="col-5 text-center">
<img src="../plantilla/dist/img/user2-160x160.jpg" alt="user-avatar" class="img-circle img-fluid">
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
<a href="#" class="btn btn-sm bg-teal">
<i class="fas fa-comments"></i>
</a>
<a href="#" class="btn btn-sm btn-primary">
<i class="fas fa-user"></i> View Profile
</a>
</div>
</div>
</div>
</div>
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
Digital Strategist
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-7">
<h2 class="lead"><b>Nicole Pearson</b></h2>
<p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
</ul>
</div>
<div class="col-5 text-center">
<img src="../plantilla/dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
<a href="#" class="btn btn-sm bg-teal">
<i class="fas fa-comments"></i>
</a>
<a href="#" class="btn btn-sm btn-primary">
<i class="fas fa-user"></i> View Profile
</a>
</div>
</div>
</div>
</div>
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
Digital Strategist
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-7">
<h2 class="lead"><b>Nicole Pearson</b></h2>
<p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
</ul>
</div>
<div class="col-5 text-center">
<img src="../plantilla/dist/img/user2-160x160.jpg" alt="user-avatar" class="img-circle img-fluid">
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
<a href="#" class="btn btn-sm bg-teal">
<i class="fas fa-comments"></i>
</a>
<a href="#" class="btn btn-sm btn-primary">
<i class="fas fa-user"></i> View Profile
</a>
</div>
</div>
</div>
</div>
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
Digital Strategist
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-7">
<h2 class="lead"><b>Nicole Pearson</b></h2>
<p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
</ul>
</div>
<div class="col-5 text-center">
<img src="../plantilla/dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
<a href="#" class="btn btn-sm bg-teal">
<i class="fas fa-comments"></i>
</a>
<a href="#" class="btn btn-sm btn-primary">
<i class="fas fa-user"></i> View Profile
</a>
</div>
 </div>
</div>
</div>
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
Digital Strategist
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-7">
<h2 class="lead"><b>Nicole Pearson</b></h2>
<p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
</ul>
</div>
<div class="col-5 text-center">
<img src="../plantilla/dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
<a href="#" class="btn btn-sm bg-teal">
<i class="fas fa-comments"></i>
</a>
<a href="#" class="btn btn-sm btn-primary">
<i class="fas fa-user"></i> View Profile
</a>
</div>
</div>
</div>
</div>
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
Digital Strategist
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-7">
<h2 class="lead"><b>Nicole Pearson</b></h2>
<p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
</ul>
</div>
<div class="col-5 text-center">
<img src="../plantilla/dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
<a href="#" class="btn btn-sm bg-teal">
<i class="fas fa-comments"></i>
</a>
<a href="#" class="btn btn-sm btn-primary">
<i class="fas fa-user"></i> View Profile
</a>
</div>
</div>
</div>
</div>
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
Digital Strategist
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-7">
<h2 class="lead"><b>Nicole Pearson</b></h2>
<p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
</ul>
</div>
<div class="col-5 text-center">
<img src="../plantilla/dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
<a href="#" class="btn btn-sm bg-teal">
<i class="fas fa-comments"></i>
</a>
<a href="#" class="btn btn-sm btn-primary">
<i class="fas fa-user"></i> View Profile
</a>
</div>
</div>
</div>
</div>
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
Digital Strategist
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-7">
<h2 class="lead"><b>Nicole Pearson</b></h2>
<p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
</ul>
</div>
<div class="col-5 text-center">
<img src="../plantilla/dist/img/user2-160x160.jpg" alt="user-avatar" class="img-circle img-fluid">
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
<a href="#" class="btn btn-sm bg-teal">
<i class="fas fa-comments"></i>
</a>
<a href="#" class="btn btn-sm btn-primary">
<i class="fas fa-user"></i> View Profile
</a>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="card-footer">
<nav aria-label="Contacts Page Navigation">
<ul class="pagination justify-content-center m-0">
<li class="page-item active"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">4</a></li>
<li class="page-item"><a class="page-link" href="#">5</a></li>
<li class="page-item"><a class="page-link" href="#">6</a></li>
<li class="page-item"><a class="page-link" href="#">7</a></li>
<li class="page-item"><a class="page-link" href="#">8</a></li>
</ul>
</nav>
</div>

</div>

</section>

</div>

  
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
    </div>


<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../plantilla/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../plantilla/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../plantilla/dist/js/demo.js"></script>
</body>
</html>

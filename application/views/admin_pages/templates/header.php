<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlite/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlite/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlite/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlite/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlite/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlite/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlite/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlite/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlite/plugins/datatables/dataTables.bootstrap4.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlite/dist/css/adminlte.min.css">


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo base_url(); ?>" class="nav-link"><b>TQF Documentation</b></a>
            </li>
<!--            <li class="nav-item d-none d-sm-inline-block">-->
<!--                <a href="#" class="nav-link">Contact</a>-->
<!--            </li>-->
        </ul>

        <!-- SEARCH FORM -->
<!--        <form class="form-inline ml-3">-->
<!--            <div class="input-group input-group-sm">-->
<!--                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">-->
<!--                <div class="input-group-append">-->
<!--                    <button class="btn btn-navbar" type="submit">-->
<!--                        <i class="fa fa-search"></i>-->
<!--                    </button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </form>-->

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
<!--                    <i class="fa fa-comments-o"></i>-->
<!--                    <span class="badge badge-danger navbar-badge">3</span>-->
                    <img src="<?php echo base_url() . "assets/adminlite/";?>dist/img/user1-128x128.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-1"
                         >
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item" style="text-align: center">
                        <h5>Profile</h5>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item" style="text-align: center">
                       <h5>Setting</h5>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">Log out</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->

        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="<?php echo base_url() . "assets/images/logo1.png";?>" alt="Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Fatoni University</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="<?php echo base_url()."lecturer";?>" class="nav-link active">
                            <i class="nav-icon fa fa-tachometer-alt"></i>

                            <p>
                                Dashboard
<!--                                <span class="right badge badge-danger">New</span>-->
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">FRAMEWORKS</li>
                    <li class="nav-item">
                        <a href="<?php echo base_url()."lecturer/tqf2";?>" class="nav-link">
                            <i class="nav-icon fa fa-calendar"></i>
                            <p>
                                TQF
                                <!-- <span class="badge badge-info right">2</span>-->
                            </p>
                        </a>
                    </li>

                    <li class="nav-header">General Management</li>
                    <li class="nav-item">
                        <a href="<?php echo base_url()."admin/user";?>" class="nav-link">
                            <i class="nav-icon fa fa-users"></i>

                            <p>
                                Users
                                <!-- <span class="badge badge-info right">2</span>-->
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url()."admin/faculty";?>" class="nav-link">
                            <i class="nav-icon fa fa-globe"></i>

                            <p>
                                Faculty
                                <!-- <span class="badge badge-info right">2</span>-->
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url()."admin/position";?>" class="nav-link">
                            <i class="nav-icon fa fa-address-card"></i>

                            <p>
                                Position
                                <!-- <span class="badge badge-info right">2</span>-->
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url()."admin/place_study";?>" class="nav-link">
                            <i class="nav-icon fa fa-building"></i>
                            <p>
                                Place study
                                <!-- <span class="badge badge-info right">2</span>-->
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url()."admin/course";?>" class="nav-link">
                            <i class="nav-icon fa fa-list-alt"></i>
                            <p>
                                Course
                                <!-- <span class="badge badge-info right">2</span>-->
                            </p>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

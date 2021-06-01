<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>Ample Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php base_url() ?>../static/plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="<?php base_url() ?>../static/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php base_url() ?>../static/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="<?php base_url() ?>../static/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php base_url() ?>../static/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php base_url() ?>../static/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php base_url() ?>../static/css/styles_files_menu.css">
</head>
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin6">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class="navbar-brand" href="dashboard.html">
                    <!-- Logo icon -->
                    <b class="logo-icon">
                        <!-- Dark Logo icon -->
                        <img src="<?php base_url() ?>../static/plugins/images/logo-icon.png" alt="homepage" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                        <!-- dark Logo text -->
                        <img src="<?php base_url() ?>../static/plugins/images/logo-text.png" alt="homepage" />
                    </span>
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav ms-auto d-flex align-items-center">

                    <li>
                        <a class="nav-link dropdown-toggle profile-pic" id="logout" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <img src="<?php base_url() ?>../static/plugins/images/users/user-default.png" alt="user-img" width="36"
                            class="img-circle">
                            <span class="text-white font-medium"><?= $username ?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="logout">
                            <li><a class="dropdown-item" href="<?php base_url() ?>logout">Cerrar sesión</a></li>
                            <li><a class="dropdown-item" href="<?php base_url() ?>lock_user">Desactivar usuario</a></li>
                        </ul>
                    </li>
                        <!-- ============================================================== -->
                        <!-- User profile -->
                        <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php base_url() ?>user_settings" aria-expanded="false">
                                <i class="fas fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Perfil</span>
                            </a>
                        </li>
                        <li class="sidebar-item" id="sideAccordionArchivo">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" data-bs-toggle="collapse" data-bs-target="#carpetas" aria-expanded="false" aria-controls="carpetas">
                                <i class="fas fa-folder-open" aria-hidden="true"></i>
                                <span class="hide-menu">Archivos</span>
                            </a>
                            <div class="collapse" id="carpetas" aria-labelledby="headingTwo" data-bs-parent="#sideAccordionArchivo">
                                <nav class="nav-link">
                                 <ul>
                                     <li class="sidebar-nav">
                                         <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php base_url() ?>load_files" aria-expanded="false">
                                            <i class="fas fa-folder-open" aria-hidden="true"></i>
                                            <span class="hide-menu">Subir archivos</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-nav">
                                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php base_url()?>show_files" aria-expanded="false">
                                            <i class="fas fa-folder-open" aria-hidden="true"></i>
                                            <span class="hide-menu">Consultar archivos</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </li>
                </ul>

            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
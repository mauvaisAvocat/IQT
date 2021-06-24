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
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>static/plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>static/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>static/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>static/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>static/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>static/bootstrap/css/bootstrap.min.css">
    <link href="<?= base_url() ?>static/css/table_style.css" rel="stylesheet" />
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

    <!-- Modal -->
    <div class="modal fade" id="user-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-dark">
            <h5 class="modal-title text-white" id="exampleModalLabel">Desactivar usuario</h5>
            <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            ¿Estás seguro de desactivar <strong><span id="modal-nombre-usuario"></span></strong>?
            <br />
            <small>Esta acción no se podrá deshacer y no podrá iniciar sesión.</small>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-danger" id="btn-confirm-unable">Confirmar</button>
        </div>
    </div>
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
                    <img src="<?= base_url() ?>static/plugins/images/logo-icon.png" alt="homepage" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                    <!-- dark Logo text -->
                    <img src="<?= base_url() ?>static/plugins/images/logo-text.png" alt="homepage" />
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
        <div class="navbar-collapse collapse" id="navbarSupportedContent" style="background: #462B50;">

            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav ms-auto d-flex align-items-center">

                <li>
                    <a class="nav-link dropdown-toggle profile-pic" id="logout" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        <img src="<?= base_url() ?>static/plugins/images/users/user-default.png" alt="user-img" width="36"
                        class="img-circle">
                        <span class="text-white font-medium"><?= $username ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="logout">
                        <li><a class="dropdown-item" href="<?= base_url() ?>main/logout">Cerrar sesión</a></li>
                        <li><a class="dropdown-item btn-unable-user" data-bs-toggle="modal" data-bs-target="#user-modal" data-user="<?= $username ?>">Desactivar usuario</a></li>
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
                <li class="sidebar-item pt-2" id="sideAccordionPerfil">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"data-bs-toggle="collapse" data-bs-target="#perfil" aria-expanded="false" aria-controls="perfil">
                        <i class="fas fa-user" aria-hidden="true" style="margin-right: 5px;"></i>
                        <span class="hide-menu">Perfil</span>
                    </a>
                    <div class="collapse" id="perfil" aria-labelledby="headingTwo" data-bs-parent="#sideAccordionPerfil"> 
                        <nav class="nav-link">
                            <ul>
                                <li class="sidebar-nav">
                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url() ?>main/user_settings" aria-expanded="false">
                                        <i class="fas fa-user-edit" style="margin-right: 5px;"></i>
                                        <span class="hide-menu">Configuración</span>
                                    </a>
                                </li>
                                <li class="sidebar-nav">
                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url() ?>post/load_posts" aria-expanded="false">
                                        <i class="fas fa-marker" style="margin-right: 5px;"></i>
                                        <span class="hide-menu">Posts</span>
                                    </a>
                                </li>
                                <li class="sidebar-nav">
                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" data-bs-toggle="collapse" data-bs-target="#directorio" aria-expanded="false" aria-controls="directorio">
                                        <i class="fas fa-address-book" aria-hidden="true" style="margin-right: 5px;"></i>
                                        <span class="hide-menu">Directorio</span>
                                    </a>
                                    <div class="collapse" id="directorio">
                                        <nav class="nav-link">
                                            <ul>
                                                <?php foreach ($direction_list as $direction) : ?>
                                                <li class="sidebar-nav">
                                                    <a class="sidebar-link waves-effect waves-dark sidebar-link url-direction" aria-expanded="false" data-iddirection="<?= $direction->ID ?>">
                                                       <span class="hide-menu" style="font-size: 12px;"><?= $direction->NOMBRE ?>
                                                       </span> 
                                                    </a>
                                                </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </nav>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </li>
                <!-- Files -->
                <li class="sidebar-item" id="sideAccordionArchivo">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" data-bs-toggle="collapse" data-bs-target="#carpetas" aria-expanded="false" aria-controls="carpetas">
                        <i class="fas fa-folder-open" aria-hidden="true" style="margin-right: 5px"></i>
                        <span class="hide-menu">Carpetas</span>
                    </a>
                    <div class="collapse" id="carpetas" aria-labelledby="headingTwo" data-bs-parent="#sideAccordionArchivo">
                        <nav class="nav-link">
                           <ul>
                            <?php foreach($folders_list as $folder) : ?>
                               <li class="sidebar-nav">
                                   <a class="sidebar-link waves-effect waves-dark sidebar-link send-id-carpeta" aria-expanded="false" data-idcarpeta="<?= $folder->ID ?>">
                                    <i class="fas fa-folder" aria-hidden="true" style="margin-right: 5px;"></i>
                                    <span class="hide-menu"><?= $folder->NOMBRE ?></span>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                </div>
            </li>
            <!-- New folder -->
            <li class="sidebar-item show-alert" style="margin-left: 15px;">
                <form action="<?= base_url() ?>file/upload_folder" method="post" id="folder-form">
                    <div class="row">
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="foldername" placeholder="Nueva carpeta..." required>
                        </div>
                        <div class="col-md-4">
                            <button  type="button" class="btn btn-primary" id="new-folder">
                                <i class="fas fa-folder-plus"></i>
                            </button>
                        </div>
                    </div>
                </form>
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
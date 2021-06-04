<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Andrea Suárez Mendoza" />
    <title>Prueba</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>static/assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url() ?>static/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>static/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container px-5">
            <a class="navbar-brand" href="#!">
                <img src="https://www.iqt.gob.mx/wp-content/themes/InstitutoQueretanoDelTransporte/images/logoTemporal.png" alt="" width="200" height="65">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>main/directory_view">Directorio</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center my-5">
                        <h1 class="display-5 fw-bolder text-white mb-2">Present your business in a whole new way</h1>
                        <p class="lead text-white-50 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit!</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                            <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card text-dark bg-light mb-3">
                        <div class="card-header">Login</div>
                        <div class="card-body">
                            <form id="login" action="<?= base_url() ?>main/login_validation" method="post"> 
                                <div class="mb-3">
                                    <label for="inputUsername">Username</label>
                                    <input class="form-control" type="text" name="username">
                                    <span class="text-danger"><?php echo form_error('username'); ?></span>
                                </div>
                                <div class="mb-3">
                                    <label for="inputPassword">Password</label>
                                    <input class="form-control" type="password" name="password">
                                    <span class="text-danger"><?php echo form_error('password'); ?></span>
                                </div>
                                <button class="btn btn-primary" type="submit" name="insert">Iniciar sesión</button>
                                <?php
                                echo $this->session->flashdata("error");
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
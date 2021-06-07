<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper" style="min-height: 250px;">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"><i class="far fa-edit"></i>Editar datos</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal">Dashboard</a></li>
                    </ol>
                    <a href="<?= base_url() ?>post/"
                        class="btn btn-dark  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Posts</a>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <div class="card border-dark">
                            <div class="card-header">Datos</div>
                            <div class="card-body">
                               <form action="<?php base_url() ?>edit_user" method="post">
                                    <div class="form-group">
                                        <label for="inputAddress">Domicilio:</label>
                                        <input id="address" class="form-control" type="text" name="address" value="<?= $address ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPhone">Teléfono:</label>
                                        <input id="phone" class="form-control" type="number" name="phone" value="<?= $phone ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputExtension">Extensión:</label>
                                        <input id="extension" class="form-control" type="number" name="extension" value="<?= $extension ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputRFC">RFC:</label>
                                        <input id="rfc" class="form-control" type="text" name="rfc" value="<?= $rfc ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputCurp">CURP:</label>
                                        <input id="curp" class="form-control" type="text" name="curp" value="<?= $curp ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword">Cambiar password:</label>
                                        <input id="password" class="form-control" type="password" name="password" value="<?= $password ?>">
                                    </div>
                                    <button class="btn btn-success" type="submit">Guardar cambios</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->



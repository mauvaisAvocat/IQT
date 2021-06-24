<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper" style="min-height: 250px;">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Consultar archivos</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="<?= base_url() ?>main/enter" class="fw-normal">Dashboard</a></li>
                    </ol>
                    <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#file-modal" 
                        class="btn btn-success  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Subir archivo</a>
                    </div>
                    <div class="modal fade" id="file-modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header bg-dark">
                                    <h5 class="modal-title text-white">Subir archivo</h5>
                                    <button class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="" method="post" enctype="multipart/form-data" id="form-file">
                                                <div class="mb-3">
                                                    <label for="inputDocument">Fecha:</label>
                                                    <input class="form-control" type="date" name="date" id="date">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="inputDesc">Descripción:</label>
                                                    <input class="form-control" type="text" name="description" id="description">
                                                </div>
                                                <div class="mb-3">
                                                    <input class="form-control" type="file" name="userfile">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-success" id="btn-upload-file">Subir</button>
                                </div>
                            </div>
                        </div>
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
                        <?php if (count($files) > 0): ?>
                            <div class="card-header">
                                <i class="fas fa-file me-1"></i>
                                Documentos
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th>Fecha</th>
                                            <th>Archivo</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th>Fecha</th>
                                            <th>Archivo</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($files as $file) : ?>
                                            <tr>
                                                <td><?= $file->NOMBRE ?></td>
                                                <td><?= $file->DESCRIPCION ?></td>
                                                <td><?= $file->FECHA ?></td>
                                                <td><a class="btn btn-primary" href="<?= base_url().'file/download_file/'.$file->ID.'/'.$file->ID_CARPETA ?>"><i class="fas fa-file-download" style="margin-right: 5px;"></i>Descargar</a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php endif; ?> 
                        <?php if (empty($files)) : ?>
                            <h3><?= $message ?></h3>
                        <?php endif; ?>          
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
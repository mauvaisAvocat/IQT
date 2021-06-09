<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper" style="min-height: 250px;">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"><i class="fas fa-file" style="margin-right: 5px"></i>Consultar archivos</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal">Dashboard</a></li>
                    </ol>
                    <a href="<?= base_url() ?>main/load_files"
                    class="btn btn-success  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Subir archivo</a>
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
                <h3 class="box-title">Documentos</h3>
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Files
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Fecha</th>
                                <th>Descripción</th>
                                <th>Extensión</th>
                                <th>Archivo</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>Fecha</th>
                                <th>Descripción</th>
                                <th>Extensión</th>
                                <th>Archivo</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach ($files as $file) : ?>
                                <tr>
                                    <td><?= $file->nombre ?></td>
                                    <td><?= $file->fecha ?></td>
                                    <td><?= $file->descripcion ?></td>
                                    <td><?= $file->extension ?></td>
                                    <td><a href="<?= base_url() ?>file/download_file/<?= $file->nom_arch ?>"><?= $file->nom_arch ?></a></td>
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
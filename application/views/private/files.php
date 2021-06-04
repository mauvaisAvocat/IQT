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
                        <li><a href="#" class="fw-normal">Dashboard</a></li>
                    </ol>
                    <a href="https://www.wrappixel.com/templates/ampleadmin/" target="_blank"
                    class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Upgrade
                to Pro</a>
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
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Nombre</th>
                                    <th class="border-top-0">Fecha</th>
                                    <th class="border-top-0">Descripción</th>
                                    <th class="border-top-0">Extensión</th>
                                    <th class="border-top-0">Archivo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($files as $file) : ?>
                                    <tr>
                                        <td><?= $file->id_archivo ?></td>
                                        <td><?= $file->nombre ?></td>
                                        <td><?= $file->fecha ?></td>
                                        <td><?= $file->descripcion ?></td>
                                        <td><?= $file->extension ?></td>
        
                                        <td><i class="fas fa-file-download"><a href="<?php base_url() ?>download_file/<?= $file->nom_arch?>"><?= $file->nom_arch ?></a></i></td>
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
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper" style="min-height: 250px;">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"><i class="fas fa-file-upload"></i>Subir archivo</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal">Dashboard</a></li>
                    </ol>
                    <a href="<?= base_url() ?>file/show_files"
                    class="btn btn-primary  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Consultar archivos</a>
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
                <form action="<?= base_url() ?>file/load_files" method="post" enctype="multipart/form-data">
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
                    <button class="btn btn-success" type="submit">Subir</button>
                </form>
                <?php
                if(isset($error)){
                    echo "<strong style='color:red;'>".$error."</strong>";
                }
                if (isset($archivo)){
                    echo "<strong style='color:green;'>".$archivo["orig_name"]." subido satisfactoriamente </strong>";
                }
                ?>
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
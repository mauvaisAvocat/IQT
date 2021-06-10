<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper" style="min-height: 250px;">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"><i class="fas fa-upload" style="margin-right: 5px;"></i>Subir post</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal">Dashboard</a></li>
                    </ol>
                    <a href="#posts-views" class="btn btn-danger d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white btn-posts-views" data-bs-toggle="collapse" data-bs-target="#posts-views" aria-expandend="false" aria-controls="posts-views">
                        Ver posts
                    </a>
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
                <div class="white-box" id="posts">
                    <div class="card col-md-10 offset-md-1">
                        <div class="card-header bg-dark"></div>
                        <div class="card-body">
                            <form action="<?= base_url() ?>post/load_posts" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="inputTittle">Titulo:</label>
                                    <input class="form-control" type="text" name="tittle" id="tittle" required>
                                </div>
                                <div class="mb-3">
                                    <label for="inputMessage">Mensaje:</label>
                                    <textarea class="form-control" name="message" id="message" placeholder="Escribe aquí..." required></textarea>
                                </div>
                                <div class="mb-3">
                                    <input type="file" name="userfile" id="userfile" required>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-success" type="submit">Subir</button>
                                </div>
                            </form>
                            <?php
                            if (isset($error))
                                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>".$error."<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                            if (isset($archivo))
                                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>".$archivo['file_name']."<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                            if (isset($message))
                                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>".$message."<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                            ?>
                        </div>
                    </div>
                </div>
                <!-- Show user posts -->
                <?php if (!empty($posts)) : ?>
                    <div class="white-box collapse" id="posts-views">

                    </div>
                <?php endif; ?>
                <?php if (empty($posts)) : ?>
                    <div class="white-box">
                        <div class="container px-5 my-5">
                            <h3>No hay posts</h3>
                        </div>
                    </div>
                <?php endif; ?>
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
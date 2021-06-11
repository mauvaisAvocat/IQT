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
                        <li><a href="" class="fw-normal">Dashboard</a></li>
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
                <?php if (!empty($posts_list)) : ?>
                    <div class="white-box collapse" id="posts-views">
                        <div class="container px-5 my-5">
                            <div class="row gx-5">
                                <?php foreach ($posts_list as $post) : ?>
                                    <div class="col-lg-4 mb-5 mb-lg-0">
                                     <div class="card bg-light" style="max-width: 20rem;">
                                        <div class="card-header">
                                            <h5 class="card-title"><?= $post->titulo ?></h5>
                                        </div>
                                        <img class="card-img-top" src="<?= base_url().$post->ruta ?>">
                                        <div class="card-body">
                                            <p class="card-text"><?= $post->mensaje ?></p>
                                            <a class="btn btn-danger btn-delete-post" type="button" data-bs-toggle="modal" data-bs-target="#post-modal" data-idpost="<?= $post->id_post ?>" data-post="<?= $post->titulo ?>">Eliminar</a>
                                        </div>
                                        <div class="card-footer"><?= $post->username ?></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="post-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header bg-dark">
                                <h5 class="modal-title text-white" id="exampleModalLabel">Eliminar post</h5>
                                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ¿Estás seguro de eliminar <strong><span id="modal-nombre-post"></span></strong>?
                                <br />
                                <small>Esta acción no se podrá deshacer.</small>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-danger" id="btn-confirm-delete">Confirmar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if (empty($posts_list)) : ?>
        <div class="white-box">
            <div class="container px-5 my-5">
                <div class="alert alert-warning" role="alert">
                    <h3><strong>No hay posts</strong></h3>
                </div>
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
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper" style="min-height: 250px;">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"><i class="fas fa-upload"></i>Subir post</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal">Dashboard</a></li>
                    </ol>
                    <a href="<?= base_url() ?>main/load_posts"
                        class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">
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
                <div class="white-box">
                    <form action="<?= base_url() ?>post/load_posts" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="inputTittle">Título:</label>
                            <input class="form-control" type="text" name="tittle" id="tittle">
                        </div>
                        <div class="mb-3">
                            <label for="inputMessage">Mensaje:</label>
                            <textarea class="form-control" name="message" id="message" placeholder="Escribe..."></textarea>
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="file" name="userfile">
                        </div>
                        <button class="btn btn-success" type="submit">Subir</button>
                    </form>
                    <?php
                    if (isset($error))
                        echo "<strong style='color:red;'>".$error."</strong>"; 
                    if (isset($archivo))
                        echo "<strong style='color:green;'>".$archivo["orig_name"]." subido satisfactoriamente </strong>";
                    ?>
                </div>
                <!-- Show user posts -->
                <?php if (!empty($posts_list)) : ?>
                    <div class="white-box" id="posts-views">
                        <div class="row">
                            <?php foreach ($posts_list as $post) : ?>
                                <div class="col-sm-6">
                                    <div class="card" style="width: 18rem">
                                        <img src="<?= base_url().$post->ruta ?>">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $post->titulo ?></h5>
                                            <p class="card-text"><?= $post->mensaje ?></p>
                                            <a class="btn btn-danger" href="<?= base_url().'post/btn_delete/'.$post->id_post ?>">Eliminar post</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
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
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
                        <a class="btn btn-danger btn-link-post" href="<?= base_url() ?>post/btn_delete/<?= $post->id_post ?>">Eliminar</a>
                    </div>
                    <div class="card-footer"><?= $post->username ?></div>
               </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
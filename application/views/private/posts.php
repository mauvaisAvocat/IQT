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
                    <a class="btn btn-danger btn-delete-post"type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-idpost="<?= $post->id_post ?>" data-post="<?= $post->titulo ?>">Eliminar</a>
                </div>
                <div class="card-footer"><?= $post->username ?></div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Modal -->
    <div class="modal" id="staticBackdrop">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Eliminar post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro que quieres borrar a <strong><span id="modal-nombre-persona"></span></strong>?<br /><small>Esta acción no podrá deshacerse</small>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger" id="btn-eliminar-confirmar" data-idpost="">Confirmar</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

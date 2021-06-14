 <div class="row">
    <?php foreach ($posts as $post) : ?>
  <div class="col-lg-6 bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden border border-light">
    <div class="my-3 py-3">
      <h2 class="display-5"><?= $post->titulo ?></h2>
      <p class="lead"><?= $post->username ?></p>
  </div>
  <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
    <img class="img-thumbnail" src="<?= base_url().$post->ruta ?>" >
    <p class="lead text-dark"><?= $post->mensaje ?></p>
  </div>
</div>
<?php endforeach; ?>
</div>
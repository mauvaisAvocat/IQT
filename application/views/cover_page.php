 

<div class="padding">
  <div class="full col-sm-9">

    <!-- content -->                      
    <div class="row">

     <!-- main col left --> 
     <div class="col-sm-7">
      <?php foreach ($posts as $post) : ?>
      <div class="panel panel-default">
        <div class="panel-thumbnail"><img src="<?= base_url().$post->ruta ?>" class="img-responsive"></div>
        <div class="panel-body">
          <p class="lead"><?= $post->titulo ?></p>
          <p><?= $post->mensaje ?></p>
          <a href="#"><?= $post->username ?></a>
        </div>
      </div> 
    <?php endforeach; ?>
    </div>

    <!-- main col right -->
    <div class="col-sm-5">

      <div class="well"> 
       <div class="card bg-light text-dark">
         <div class="card-header bg-dark text-white">Login</div>
         <div class="card-body">
           <form class="form" action="<?= base_url() ?>main/login_validation" method="post">
            <div class="input-group text-center">
              <input class="form-control input-lg" placeholder="Ingresa tu usuario..." type="text" name     ="username">
            </div>
            <div class="input-group text-center">
              <input class="form-control input-lg" placeholder="Ingresa tu contraseña..." type="password" name="password">
            </div>
            <div class="input-group">
              <span class="input-group-btn"><button class="btn btn-lg btn-primary" type="submit" style="margin-top: 5px;">Iniciar sesión</button></span>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
     <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Bootply Editor &amp; Code Library</h4></div>
     <div class="panel-body">
      <p><img src="assets/img/150x150.gif" class="img-circle pull-right"> <a href="#">The Bootstrap Playground</a></p>
      <div class="clearfix"></div>
      <hr>
      Design, build, test, and prototype 
      using Bootstrap in real-time from your Web browser. Bootply combines the
      power of hand-coded HTML, CSS and JavaScript with the benefits of 
      responsive design using Bootstrap. Find and showcase Bootstrap-ready 
      snippets in the 100% free Bootply.com code repository.
    </div>
  </div>

  <div class="panel panel-default">
   <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Stackoverflow</h4></div>
   <div class="panel-body">
    <img src="assets/img/150x150.gif" class="img-circle pull-right"> <a href="#">Keyword: Bootstrap</a>
    <div class="clearfix"></div>
    <hr>

    <p>If you're looking for help with Bootstrap code, the <code>twitter-bootstrap</code> tag at <a href="http://stackoverflow.com/questions/tagged/twitter-bootstrap">Stackoverflow</a> is a good place to find answers.</p>

    <hr>
    <form>
      <div class="input-group">
        <div class="input-group-btn">
          <button class="btn btn-default">+1</button><button class="btn btn-default"><i class="glyphicon glyphicon-share"></i></button>
        </div>
        <input class="form-control" placeholder="Add a comment.." type="text">
      </div>
    </form>

  </div>
</div>

<div class="panel panel-default">
 <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Portlet Heading</h4></div>
 <div class="panel-body">
  <ul class="list-group">
    <li class="list-group-item">Modals</li>
    <li class="list-group-item">Sliders / Carousel</li>
    <li class="list-group-item">Thumbnails</li>
  </ul>
</div>
</div>

<div class="panel panel-default">
  <div class="panel-thumbnail"><img src="assets/img/bg_4.jpg" class="img-responsive"></div>
  <div class="panel-body">
    <p class="lead">Social Good</p>
    <p>1,200 Followers, 83 Posts</p>

    <p>
      <img src="assets/img/photo.jpg" height="28px" width="28px">
      <img src="assets/img/photo.png" height="28px" width="28px">
      <img src="assets/img/photo_002.jpg" height="28px" width="28px">
    </p>
  </div>
</div>

</div>
</div>

 

<div class="padding">
  <div class="full col-sm-9">

    <!-- content -->                      
    <div class="row">

     <!-- main col left --> 
     <div class="col-sm-7">
      <div class="panel panel-default">
        <div class="panel-thumbnail"><img src="" class="img-responsive"></div>
        <div class="panel-body">
          <p class="lead"></p>
          <p></p>
          <a href="#"></a>
        </div>
      </div> 
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
   <div class="panel-heading"><h4>Contacto</h4></div>
   <div class="panel-body">
    <div class="clearfix"></div>
    <form>
      <div class="input-group">
        <div class="input-group-btn">
          <button class="btn btn-default"><i class="fas fa-user"></i></button>
          <span><strong>Nombre:</strong></span>
        </div>
      </div>
      <input class="form-control" placeholder="Ingresa tu nombre.." type="text" name="name">
      <div class="input-group">
        <div class="input-group-btn">
          <button class="btn btn-default"><i class="fas fa-envelope"></i></button>
          <span><strong>Correo electrónico:</strong></span>
        </div>
      </div>
      <input class="form-control" placeholder="Ingresa tu email.." type="text" name="email">
      <div class="input-group">
        <div class="input-group-btn">
          <button class="btn btn-default"><i class="fas fa-inbox"></i></button>
          <span><strong>Asunto:</strong></span>
        </div>
      </div>
      <input class="form-control" placeholder="Ingresa el asunto.." type="text" name="issue">
      <div class="input-group">
        <div class="input-group-btn">
          <button class="btn btn-default"><i class="fas fa-sticky-note"></i></button>
          <span><strong>Mensaje:</strong></span>
        </div>
      </div>
      <textarea class="form-control" placeholder="Mensaje.." name="message"></textarea>
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

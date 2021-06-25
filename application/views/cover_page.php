
<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">

      <div class="col-lg-8 mb-5 mb-lg-0">

        <div class="post-content post-single" id="post">
          <div class="post-media post-image">
            <img id="image-post-user" src="<?= base_url() ?>static/assets/img/iqt-Logo-grande-alpha-150x150.png" loading="lazy" class="img-fluid" alt="post-image">
          </div>

          <div class="post-body" id="post-news">
            <div class="entry-header">
              <div class="post-meta">
                <span class="post-author">
                  <i class="far fa-user"></i><a class="username-post" href="#">Admin</a>
                </span>
                <span class="post-cat">
                  <i class="far fa-folder-open"></i><a href="#"> Noticias</a>
                </span>
                <span class="post-meta-date date-post"><i class="far fa-calendar"></i>Santiago de Querétaro, Qro., 25 de junio de 2021</span>
                </div>
                <h2 class="entry-title tittle-post">
                  Esto es una prueba
                </h2>
              </div><!-- header end -->

              <div class="entry-content">
                <p class="message-post">
                  IQT Inicia Procedimiento Administrativo de Sanción y lamenta  deceso de ciclista tras accidente en la carretera SJR-Xilitla

 

 

                  Se dará seguimiento para brindar todo el apoyo
                  El IQT colaborará con las autoridades para el esclarecimiento del hecho.
 

 

                  El Instituto Queretano del Transporte (IQT) lamenta profundamente la pérdida de la vida de un ciclista, quien se vio involucrado en un accidente con una unidad de servicio público, en la modalidad de taxi, en la carretera San Juan del Río-Xilitla.

 

                  De forma inmediata el Instituto hizo contacto con el concesionario de la unidad para garantizar que se brinde todo el apoyo correspondiente a los deudos ante la irreparable pérdida y dará seguimiento a ello.

 

                  De igual forma, ante el accidente registrado, de forma preventiva el IQT ha iniciado el Procedimiento Administrativos de Sanción (PAS) y sancionará conforme lo establece la Ley de Movilidad para el Transporte del Estado de Querétaro, además se colaborará con las autoridades competentes en las investigaciones, con el objetivo de determinar una posible responsabilidad de tipo penal.

 
                </p>
              </div>
            </div><!-- post-body end -->
          </div><!-- post content end -->

          <div class="author-box d-nlock d-sm-flex">
            <div class="author-img mb-4 mb-md-0">
              <img loading="lazy" src="images/news/avator1.png" alt="author">
            </div>
            <div class="author-info">
              <h3>Admin<span>Prueba</span></h3>
            </div>
          </div> <!-- Author box end -->
        </div><!-- Content Col end -->

        <div class="col-lg-4">

          <div class="sidebar sidebar-right">
            <div class="widget">
              <h3 class="widget-title">Login</h3>
              <div class="card text-dark bg-light mb-3">
                <div class="card-header bg-dark text-white">Login</div>
                <div class="card-body">
                  <form id="login" action="<?= base_url() ?>main/login_validation" method="post"> 
                    <div class="mb-3">
                      <label for="inputUsername">Username</label>
                      <input class="form-control" type="text" name="username">
                      <span class="text-danger"><?php echo form_error('username'); ?></span>
                    </div>
                    <div class="mb-3">
                      <label for="inputPassword">Password</label>
                      <input class="form-control" type="password" name="password">
                      <span class="text-danger"><?php echo form_error('password'); ?></span>
                    </div>
                    <button class="btn btn-primary" type="submit" name="insert">Iniciar sesión</button>
                    <?php
                    echo $this->session->flashdata("error");
                    if (isset($message))
                      echo "<div class='alert alert-danger' role='alert'>.$message.</div>";
                    ?>
                  </form>
                </div>
              </div>
            </div>
            <!-- Categories end -->

            <div class="widget recent-posts">
              <h3 class="widget-title">Comunicados</h3>
              <ul class="list-unstyled">
            
                  <li class="d-flex align-items-center">
                    <div class="posts-thumb">
                      <a><img loading="lazy" alt="img" src=""></a>
                    </div>
                    <div class="post-info">
                      <h4 class="entry-title url-tittle">
                        <a class="url-info" href="#post" data-idpost="" data-username="" data-date="" data-tittle="" data-message="" data-route="">Prueba</a>
                      </h4>
                    </div>
                  </li><!-- 1st post end-->
        
              </ul>

            </div><!-- Recent post end -->

            <div class="widget" id="contact-us">
              <h3 class="widget-title">Contáctanos</h3>
              <div class="card text-dark bg-light mb-3">
                <div class="card-header bg-dark text-white">Contacto</div>
                <div class="card-body">
                  <form id="contact-form" action="" method="post"> 
                    <div class="form-group">
                      <label for="inputName">Nombre:</label>
                      <input class="form-control" type="text" name="name" required>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail">Correo electrónico:</label>
                      <input class="form-control" type="email" name="email" required> 
                    </div>
                    <div class="form-group">
                      <label for="inputIssue">Asunto:</label>
                      <input class="form-control" type="text" name="issue" required>
                    </div>
                    <div class="form-group">
                      <label for="inputMessage">Mensaje:</label>
                      <textarea class="form-control" name="message" required></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit" id="btn-submit-contact">Enviar</button>
                  </form>
                </div>
              </div>
            </div>
            <!-- Contact end -->

          </div><!-- Sidebar end -->
        </div><!-- Sidebar Col end -->

      </div><!-- Main row end -->

    </div><!-- Conatiner end -->
  </section><!-- Main container end -->


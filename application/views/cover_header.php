<!DOCTYPE html>
<html lang="en">
  <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Facebook Theme Demo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="<?= base_url() ?>static/css/bootstrap.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="<?= base_url() ?>static/css/facebook.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>static/css/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>static/fontawesome/css/all.min.css">
    </head>
    
    <body>
        
        <div class="wrapper">
      <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">

          <!-- main right col -->
          <div class="column col-sm-12 col-xs-11" id="main">
            
            <!-- top nav -->
            <div class="navbar navbar-blue navbar-static-top">  
              <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a href="http://usebootstrap.com/theme/facebook" class="navbar-brand logo">IQT</a>
              </div>
              <nav class="collapse navbar-collapse" role="navigation">
                <ul class="nav navbar-nav">
                <li>
                <a href="<?= base_url() ?>"><i class="fas fa-home"></i> Inicio</a>
                </li>
                <li>
                <a href="<?= base_url() ?>main/directory_view"><i class="fas fa-book"></i> Directorio</a>
                </li>
              </ul>
              </nav>
            </div>
            <!-- /top nav -->
                <!--post modal-->
    <div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          Update Status
        </div>
        <div class="modal-body">
          <form class="form center-block">
          <div class="form-group">
            <textarea class="form-control input-lg" autofocus="" placeholder="What do you want to share?"></textarea>
          </div>
          </form>
        </div>
        <div class="modal-footer">
          <div>
          <button class="btn btn-primary btn-sm" data-dismiss="modal" aria-hidden="true">Post</button>
          <ul class="pull-left list-inline"><li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li><li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li><li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
          </div>  
        </div>
      </div>
      </div>
    </div>
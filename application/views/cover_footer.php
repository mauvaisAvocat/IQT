 <!--/row-->
                
                <div class="row">
                  <div class="col-sm-6">
                  <a href="#">Twitter</a> <small class="text-muted">|</small> <a href="#">Facebook</a> <small class="text-muted">|</small> <a href="#">Google+</a>
                  </div>
                </div>
                
                <div class="row" id="footer">    
                  <div class="col-sm-6">
                  
                  </div>
                  <div class="col-sm-6">
                  <p>
                  <a href="#" class="pull-right">©Copyright <?php echo date('Y'); ?></a>
                  </p>
                  </div>
                </div>
                
                <hr>
                
                <h4 class="text-center">
                <a href="http://usebootstrap.com/theme/facebook" target="ext">Download this Template @Bootply</a>
                </h4>
                
                <hr>
                
                
              </div><!-- /col-9 -->
            </div><!-- /padding -->
          </div>
          <!-- /main -->
          
        </div>
      </div>
    </div>

        
        <script type="text/javascript" src="<?= base_url() ?>static/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>static/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
      $('[data-toggle=offcanvas]').click(function() {
        $(this).toggleClass('visible-xs text-center');
        $(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
        $('.row-offcanvas').toggleClass('active');
        $('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
        $('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
        $('#btnShow').toggle();
      });
        });
        </script>
</body></html>
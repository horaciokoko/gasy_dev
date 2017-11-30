<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- styles -->
    <link rel=”stylesheet type=”text/css” href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    
  </head>
  <body>
    <div class=”offset6 span6 left-align loginArea”>
      <a href=”#login” role=”button” data-toggle=”modal”>
      <span class=”btn btn-mini btn-danger”> Login  </span>
      </a>
    </div>

    <!-- Login Block -->
    <div id=”login” class=”modal hide fade in” tabindex=”-1″ role=”dialog” aria-labelledby=”login” aria-hidden=”false” >
      <div class=”modal-header”>
        <button type=”button” class=”close” data-dismiss=”modal” aria-hidden=”true”>
          ×
        </button>
        <h3>Sell Anythings : Login Block</h3>
      </div>
      <div class=”modal-body”>
        <form class=”form-horizontal loginFrm”>
          <div class=”control-group”>
            <input type=”text” id=”inputEmail” placeholder=”Email”>
          </div>
          <div class=”control-group”>
            <input type=”password” id=”inputPassword” placeholder=”Password”>
          </div>
          <div class=”control-group”>
            <label class=”checkbox”>
            <input type=”checkbox” name=”remember”> Remember me
            </label>
          </div>
        </form>
        <button type=”submit” class=”btn btn-success”>Sign in</button>
        <button class=”btn” data-dismiss=”modal” aria-hidden=”true”>Close</button>
      </div>
    </div>
    <!-- javascript
        ==================================================-->
        <!-- Placed at the end of the document so the pages load faster-->
        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js">   
    </script>
        <!--script src="<?php echo base_url(); ?>assets/js/smart.js"></script--> 
  </body>
</html>>
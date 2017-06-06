<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">login</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>  
</div>

 
<form action="<?php echo baseUrl ?>login/principal/verificar" method="POST">  
  <?php Token::field() ?>
  <input type="text" name="username" /><br/>
  <input type="text" name="password" />
  <br>
  <input type="submit" value="Login"/>
</form>

<i class="fa fa-user"></i>
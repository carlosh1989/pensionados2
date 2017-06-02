<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">INGRESAR PENSIONADO</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <form action="<?php echo baseUrl ?>admin/pensionados" method="POST">
        <?php echo Token::field() ?>
          <input type="text" name="nombre" placeholder="Ingrese Nombre">
          <input type="text" name="apellido" placeholder="Ingrese Apellido">
          <input type="number" name="cedula" placeholder="cedula">
          <button type="submit" class="btn btn-success"> Guardar</button>
        </form>
        </div>
</div>

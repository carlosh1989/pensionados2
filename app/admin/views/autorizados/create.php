<script language="javascript">
$(document).ready(function(){
$("#municipio").change(function () {
$("#municipio option:selected").each(function () {
idmunicipio = $(this).val();
$.post("parroquias.php", { idmunicipio:idmunicipio }, function(data){
$("#parroquia").html(data);
});
window.console&&console.log(idmunicipio);
});
})
});
</script>
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">INGRESAR AUTORIZADO</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
      <i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
      <i class="fa fa-times"></i></button>
    </div>
  </div>
  <div class="box-body">
    <form action="<?php echo baseUrl ?>admin/autorizados" method="POST">
      <?php echo Token::field() ?>
      <input type="hidden" name="id_pensionado" value="<?php echo $id_pensionado ?>">
      <div class="row">
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="nombre" placeholder="Ingrese Nombre" required>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="apellido" placeholder="Ingrese Apellido" required>
          </div>
        </div>
        <div class="col-lg-1">
          <div class="form-group">
            <select class="form-control" name="nacionalidad" id="">
              <option value="V">V</option>
              <option value="V">E</option>
            </select>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group">
            <input class="form-control" type="number" name="cedula" placeholder="Ingrese Cedula" required>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <select class="form-control" name="id_parentesco" id="parentesco" required>
              <option value="">Parentesco</option>
              <?php foreach (\App\Parentesco::all() as $p): ?>
              <option value="<?php echo $p->id ?>"><?php echo $p->descripcion ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <input class="form-control" type="number" name="telefono" placeholder="Ingrese telefono" required>
          </div>
        </div>
      </div>
      <br>
        <div class="row">
          <div class="col-lg-12">
            <textarea placeholder="Dirección" class="form-control" name="direccion"></textarea>
          </div>
        </div>
      <hr>
      <button type="submit" class="btn btn-lg btn-success pull-right"> Guardar <i class="fa fa-save"></i></button>
    </form>
  </div>
</div>
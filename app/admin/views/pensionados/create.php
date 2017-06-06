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
      <div class="row">
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="date" name="fecha_nacimiento" placeholder="Fecha nacimiento" required>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <select class="form-control" name="sexo" id="" required>
              <option value="">Sexo</option>
              <option value="M">Masculino</option>
              <option value="F">Femenino</option>
            </select>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <select class="form-control" name="estado_civil" id="" required>
              <option value="">Estado civil</option>
              <option value="soltero">Solter@</option>
              <option value="casado">Casad@</option>
              <option value="divorciado">Divorciad@</option>
              <option value="viudo">Viud@</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="number" name="telefono" placeholder="Ingrese telefono" required>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <select class="form-control" name="id_municipio" id="municipio" required>
              <option value="">Municipio</option>
              <?php foreach (\App\Municipio::all() as $m): ?>
              <option value="<?php echo $m->id ?>"><?php echo $m->municipio ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <select class="form-control" name="id_parroquia" id="parroquia" required>
              <option value="">Parroquia</option>
              <?php foreach (\App\Parroquia::all() as $p): ?>
              <option value="<?php echo $p->id ?>"><?php echo $p->parroquia ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <textarea placeholder="Dirección" class="form-control" name="direccion"></textarea>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-lg-4">
          <div class="form-group">
            <select class="form-control" name="discapacidad" id="">
              <option value="">Dsicapacidad</option>
              <?php foreach (\App\Discapacidad::all() as $d): ?>
              <option value="<?php echo $d->id ?>"><?php echo $d->tipo ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
      </div>
      <hr>
      <button type="submit" class="btn btn-lg btn-success pull-right"> Guardar <i class="fa fa-save"></i></button>
    </form>
  </div>
</div>  
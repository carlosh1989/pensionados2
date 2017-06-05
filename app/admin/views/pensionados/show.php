<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">DATOS DE PENSIONADO</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
      <i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
      <i class="fa fa-times"></i></button>
    </div>
  </div>
  <div class="box-body">
    <div class="row">
      <div class="col-lg-3 dl-horizontal">
        <dt>Nombre:</dt>
        <dd><?php echo $pensionado->nombre ?> <?php echo $pensionado->apellido ?></dd>
      </div>
      <div class="col-lg-3 dl-horizontal">
        <dt>Cedula:</dt>
        <dd><?php echo $pensionado->nacionalidad ?>-<?php echo $pensionado->cedula ?> </dd>
      </div>
      <div class="col-lg-3 dl-horizontal">
        <dt>Telefono:</dt>
        <dd><?php echo $pensionado->telefono ?> </dd>
      </div>
      <div class="col-lg-3 dl-horizontal">
        <dt>Fecha nacimiento:</dt>
        <dd><?php echo $pensionado->fecha_nacimiento ?> </dd>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-lg-3 dl-horizontal">
        <dt>Edad:</dt>
        <dd>
        <?php list($dia,$mes,$ano) = explode('/',$pensionado->fecha_nacimiento) ?>
        <?php echo \Carbon\Carbon::createFromDate($ano,$mes,$dia)->age;  ?>
        </dd>
      </div>
      <div class="col-lg-3 dl-horizontal">
        <dt>Estado civil:</dt>
        <dd><?php echo $pensionado->estado_civil ?> </dd>
      </div>
      <div class="col-lg-3 dl-horizontal">
        <dt>Fecha de registro:</dt>
        <dd><?php echo $pensionado->fecha_registro ?> </dd>
      </div>
      <div class="col-lg-3 dl-horizontal">
        <dt>Sexo:</dt>
        <?php if ($pensionado->sexo == 'M'): ?>
        <dd>Masculino </dd>
        <?php else: ?>
        <dd>Femenino </dd>
        <?php endif ?>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-lg-3 dl-horizontal">
        <dt>Municipio:</dt>
        <dd><?php echo $pensionado->municipio->municipio ?></dd>
      </div>
      <div class="col-lg-3 dl-horizontal">
        <dt>Parroquia:</dt>
        <dd><?php echo $pensionado->parroquia->parroquia ?></dd>
      </div>
      <div class="col-lg-3 dl-horizontal">
        <dt>Discapacidad:</dt>
        <dd>
        <?php if ($pensionado->discapacidad): ?>
        <?php echo $pensionado->discapacidad->tipo ?>
        <?php else: ?>
        NINGUNA
        <?php endif ?>
        </dd>
      </div>
    </div>
    <hr>
    <?php if ($pensionado->id_autorizado): ?>
    <a class="btn btn-info" href=""><i class="fa fa-search"></i> Ver autorizado</a>
    <?php else: ?>
    <a class="btn btn-success" href=""><i class="fa fa-plus"></i> Agregar Autorizado </a>
    <?php endif ?>
  </div>
<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">PENSIONADOS</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <a class="btn btn-success fa fa-plus" href="<?php echo baseUrl ?>admin/pensionados/create"> Agregar pensionado</a>
      <table class="table table-bordered">
    <thead>
      <tr>
      <th>id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Cedula</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($pensionados as $p): ?>
      <tr>
      <td><?php echo $p->id ?></td>
        <td><?php echo $p->nombre ?></td>
        <td><?php echo $p->apellido ?></td>
        <td><?php echo $p->cedula ?></td>
        <td>
            <a class="btn btn-primary fa fa-search" href="<?php echo $baseUrl ?>admin/pensionados/<?php echo $p->id ?>"></a>
            <a class="btn btn-info fa fa-pencil" href="<?php echo $baseUrl ?>admin/pensionados/<?php echo $p->id ?>/edit"></a>
            <a class="btn btn-danger fa fa-times" href="<?php echo $baseUrl ?>admin/pensionados/<?php echo $p->id ?>/delete"></a>
        </td>
      </tr>
    <?php endforeach ?>
    </tbody>
  </table>
  </div>
</div>
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">AUTORIZADOS</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
      <i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
      <i class="fa fa-times"></i></button>
    </div>
  </div>
  <div class="box-body">
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
        <?php foreach ($autorizados as $a): ?>
        <tr>
          <td><?php echo $a->id ?></td>
          <td><?php echo $a->nombre ?></td>
          <td><?php echo $a->apellido ?></td>
          <td><?php echo $a->cedula ?></td>
          <td>
            <a class="btn btn-primary fa fa-search" href="<?php echo $baseUrl ?>admin/autorizados/<?php echo $p->id ?>"></a>
            <a class="btn btn-info fa fa-pencil" href="<?php echo $baseUrl ?>admin/autorizados/<?php echo $p->id ?>/edit"></a>
            <a class="btn btn-danger fa fa-times" href="<?php echo $baseUrl ?>admin/autorizados/<?php echo $p->id ?>/delete"></a>
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>
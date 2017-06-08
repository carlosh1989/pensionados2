<div class="panel panel-default">
<br>
  <div class="panel-heading">
    <h3 class="panel-title">AUTORIZADOS</h3>
  </div>
  <div class="panel-body">
    <table class="table" data-striped="true">
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
          <td width="15%">
            <a class="btn btn-primary fa fa-search" href="<?php echo $baseUrl ?>admin/autorizados/<?php echo $a->id ?>"></a>
            <a class="btn btn-info fa fa-pencil" href="<?php echo $baseUrl ?>admin/autorizados/<?php echo $a->id ?>/edit"></a>
            <a class="btn btn-danger fa fa-times" href="<?php echo $baseUrl ?>admin/autorizados/<?php echo $a->id ?>/delete"></a>
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>
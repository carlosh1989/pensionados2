<h3>LISTA DE LAS PERSONAS AUTORIZADAS</h3>
<table id="tablePagination" class="table table-striped table-condensed table-responsive" data-striped="true">
  <thead>
    <tr>
      <th>id</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Cedula</th>
      <th>Firma</th>
      <th>Huella</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($autorizados as $a): ?>
    <tr>
      <td><?php echo $a->id ?></td>
      <td><?php echo $a->nombre ?></td>
      <td><?php echo $a->apellido ?></td>
      <td><?php echo $a->cedula ?></td>
      <td>_________</td>
      <td>_________</td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
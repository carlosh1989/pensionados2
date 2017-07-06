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
        <?php foreach ($pensionados as $p): ?>
        <tr>
          <td><?php echo $p->id ?></td>
          <td><?php echo $p->nombre ?></td>
          <td><?php echo $p->apellido ?></td>
          <td><?php echo $p->cedula ?></td>
          <td>_________</td>
          <td>_________</td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
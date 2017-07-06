<div class="panel panel-default">
<br>
  <div class="panel-heading">
    <h3 class="panel-title">USUARIOS</h3>
  </div>
  <div class="panel-body">
    <table class="table" data-striped="true">
      <thead>
        <tr>
          <th>id</th>
          <th>Usuario </th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>rol</th>
          <th>cargo</th>
 
        </tr>
      </thead>
      <tbody>
        <?php foreach ($usuarios as $u): ?>
        <tr>
          <td><?php echo $u->id ?></td>
          <th><?php echo $u->usuario ?></th>
          <td><?php echo $u->nombre ?></td>
          <td><?php echo $u->apellido ?></td>
          <td><?php echo $u->rol ?></td>
          <td><?php echo $u->cargo ?></td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>
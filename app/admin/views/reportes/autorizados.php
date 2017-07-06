<h3>LISTA DE LAS PERSONAS AUTORIZADAS</h3>
<table width="100%">
  <tr>
          <td><b>id</b></td>
          <td><b>Nombre</b></td>
          <td><b>Apellido</b></td>
          <td><b>Cedula</b></td>  
          <td><b>Firma</b></td>
          <td><b>Huella</b></td>
        </tr>
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

</table>
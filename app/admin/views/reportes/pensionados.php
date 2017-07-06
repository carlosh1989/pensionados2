    <table width="100%">
      
        <tr>
          <td><b>id</b></td>
          <td><b>Nombre</b></td>
          <td><b>Apellido</b></td>
          <td><b>Cedula</b></td>	
          <td><b>Firma</b></td>
          <td><b>Huella</b></td>
        </tr>
      
      
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
      
    </table>
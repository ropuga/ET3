<!-- Vista para Administradores de Materia por Martín Vázquez -->

<!-- Inserción de modal -->
<?php echo $status ?>
<!-- Contenedor de tablas de adición -->
<div class="col-md-12 col-sm-12">
  <!-- Tabla de Usuarios -->
  <div>Seleccione un usuario y la materia que éste debe administrar</div>
  <br>
  <div class="col-md-5 col-sm-12">
  <div>placeholder buscador</div>
  <table><th>Usuario</th><th>Seleccionar</th>
  <form action="administradoresMateria.php" method="post">
  <?php foreach($usuarios as $key): ?>
      <tr>
        <td class="row box"><span class="elem"><?php echo $key->getUser_name(); ?></span></td>
        <td class="row box"><input type="radio" name="usuario"  value="<?php echo $key->getUser_id(); ?>"></td>
      </tr>
  <?php endforeach; ?>
  </table>
  </div>

  <!-- Tabla de Materias -->
  <div class="col-md-5 col-sm-12">
  <div>placeholder buscador</div>
  <table><th>Materia</th><th>Titulación</th><th>Editar</th>
  <?php foreach($materias as $key): ?>
    <tr>
      <td class="row box"><span class="elem"><?php echo $key->getMat_name(); ?></span></td>
      <td class="row box"><span class="elem"><?php echo $titulos[0]->findBy("tit_id",$key->getTit_id())[0]->getTit_Name(); ?></span></td>
      <td class="row box"><input type="radio" name="materia"  value="<?php echo $key->getMat_id(); ?>"></td>
    </tr>
  <?php endforeach; ?>
  </table>
  </div>
  <div class="col-md-2 col-sm-12">
  <button type="submit" class="btn btn-success" style="position:fixed">Añadir Administrador</button>
  </div>
  </form>
</div>


<!-- Contenedor de tablas de eliminación -->
<div class="col-md-12 col-sm-12">
  <table><th>Usuario</th><th>Administra</th><th>Titulación</th><th>Quitar permiso</th>
  <form action="administradoresMateria.php" method="post">
  <?php foreach($administradores as $key): ?>
      <tr>
        <td class="row box"><span class="elem"><?php echo $usuarios[0]->findBy("user_id",$key->getUser_id())[0]->getUser_Name(); ?></span></td>
        <td class="row box"><span class="elem"><?php echo $materias[0]->findBy("mat_id",$key->getMat_id())[0]->getMat_Name(); ?></span></td>
        <td class="row box"><span class="elem"><?php echo $titulos[0]->findBy("tit_id",$materias[0]->findBy("mat_id",$key->getMat_id())[0]->getTit_id())[0]->getTit_Name(); ?></span></td>
        <td class="row box"><button type="submit" class="btn btn-danger" name="parser" value="<?php echo $key->getUser_id().' '.$key->getMat_id(); ?>">Eliminar</button></td>
      </tr>
  <?php endforeach; ?>
</table>

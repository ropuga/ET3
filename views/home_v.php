<div> PÁGINA PRINCIPAL</div>
<div>
  <p>Tabla apuntes recientes</p>
  <br>
  <?php foreach($apuntes as $a): ?>
      <span class="izquierda">
      <span class="materia"><?php echo $a->getApunte_name(); ?></span>&nbsp;&nbsp;&nbsp;</span>
      <span class="materia"><?php echo $a->nombreTitulacion(); ?></span>&nbsp;&nbsp;&nbsp;</span>
      <span class="materia"><?php echo $a->nombreMateria(); ?></span>&nbsp;&nbsp;&nbsp;</span>
      <span class="materia"><?php echo $a->getAnho_academico(); ?></span>&nbsp;&nbsp;&nbsp;</span>
      <span class="materia"><?php echo $a->nombreAutor(); ?></span>&nbsp;&nbsp;&nbsp;</span>
  <?php endforeach; ?>
</div>

<div>
  <a  href="../controllers/subirApunte.php" class="bgigante btn btn-success"> Subir un apunte </a>
</div>
<div>
   <a href="nuevaNota.php" class="bgigante btn btn-success">Crear Nueva Nota</a>
</div>

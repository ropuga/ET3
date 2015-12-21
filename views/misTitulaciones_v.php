<!-- Vista para plantilla por Martín Vázquez -->
<br/><br/><br/>
<div class="col-md-6 col-sm-12">
  <p class="lead"> Titulaciones en la que esta matriculado </p>
  <p> Aqui se muestra las titulaciones en la que esta actualmente matriculado.
    Puede añadir mas usando la tabla de la derecha o eliminar alguna titulacion usando esta tabla</p>
    <hr/>
<form action="../controllers/deltit.php" class="header box-main" method="post">
  <?php foreach ($misTitulaciones as $key): ?>
    <div class="row box">
      <span class="elem">Titulacion: <?php echo $key->getTit_name(); ?></span>
      <button type="submit" class="btn btn-danger" type="submit" name="<?php echo $key->getTit_id(); ?>">Eliminar</button>
    </div>
  <?php endforeach; ?>
</form>
</div>
<div class="col-md-6 col-sm-12">
  <p class="lead"> Todas las titulaciones </p>
  <p> Aqui se muestran todas las titulaciones disponibles. Si no encuentra su titulacion contacte con un administrador</p>
  <hr/>
<form action="../controllers/addtit.php" class="header box-main" method="post">
  <?php foreach ($allTitulaciones as $key): ?>
    <div class="row box">
      <span class="elem">Titulacion: <?php echo $key->getTit_name(); ?></span>
      <button type="submit" class="btn btn-success" type="submit" name="<?php echo $key->getTit_id(); ?>">Añadir</button>
    </div>
  <?php endforeach; ?>
</form>
</div>

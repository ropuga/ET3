!-- Vista para mis Materias por Daniel de Alonso-->

<br/><br/><br/>
<div class="col-md-6 col-sm-12">
  <p class="lead"> Materias en la que esta matriculado </p>
  <p> Aqui se muestran las Materias en las que esta actualmente matriculado.
    Puede añadir mas usando haciendo click en el boton o eliminar alguna Materia usando esta tabla</p>
    <hr/>
<form action="../controllers/delMat.php" class="header box-main" method="post">
  <?php foreach ($misMaterias as $key): ?>
    <div class="row box itemtit">
      <span class="izquierda"> <?php echo $key->getMat_name(); ?></span>
      <span class="derecha"><button type="submit" class="btn btn-danger" type="submit" name="<?php echo $key->getMat_id(); ?>">Eliminar</button></span>
    </div>
  <?php endforeach; ?>
</form>

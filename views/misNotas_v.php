<!-- Vista para mis notas por Raul Villar -->

<div class="col-md-4 col-sm-12">
  <div class="banner"><h1>Mis Notas</h1></div>
  <div>
    Filtrar
    <br>
    <form action="misNotas.php" method="post">

	     <?php echo $anho; ?>

      <select class="form-control" name="mes">
        <option value="nil" selected> Seleccione un mes </option>
        <option value="01" >Enero</option>
        <option value="02" >Febrero</option>
        <option value="03" >Marzo</option>
        <option value="04" >Abril</option>
        <option value="05" >Mayo</option>
        <option value="06" >Junio</option>
        <option value="07" >Julio</option>
        <option value="08" >Agosto</option>
        <option value="09" >Septiembre</option>
        <option value="10" >Octubre</option>
        <option value="11" >Noviembre</option>
        <option value="12" >Diciembre</option>
      </select>
  </div>
  <div>
    <br/>
    <button class="btn btn-info btn-block" type="submit"> Filtrar </button>
    <a href="nuevaNota.php" class="btn btn-success btn-block">Crear Nueva Nota</a>
    </form>
  </div>

</div>
  <div class="col-md-2"></div>
  <div class="col-md-6">
    <form action="delNota.php" method="post">
      <p class="lead banner">Mis Notas </p>
      <hr/>
      <input class="form-control buscatit" placeholder="Filtrar" type="text" name="name"><br/>
      <?php if(empty($notas))echo "<p class='text-center'>Aun no ha creado ninguna nota<p/>"; ?>
    <?php foreach($notas as $nota): ?>
      <div class="itemtit row box">
        <span class="izquierda">
	      <span class="apunte"><?php echo $nota->getNota_name(); ?></span>&nbsp;&nbsp;&nbsp;,
        <span class="fecha"><?php echo $nota->getFecha(); ?></span>
        </span>
        <span class="derecha">
          <a title="Editar" href="editarNota.php?nota=<?php echo $nota->getNota_id(); ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></a>
          <a title="compartir" href="compartirNota.php?nota=<?php echo $nota->getNota_id(); ?>" class="btn btn-info"><span class="glyphicon glyphicon-share-alt"></a>
          <button title="Borrar" type="submit" class="btn btn-danger" type="submit" name="<?php echo $nota->getNota_id(); ?>"><span class="glyphicon glyphicon-trash"></button>
        </span>
     </div>
    <?php endforeach; ?>
    </form>
      <p class="lead banner">Notas compartidas conmigo </p>
      <hr/>
      <input class="form-control buscatit2" placeholder="Filtrar" type="text" name="name"><br/>
      <?php if(empty($notasCompartidas))echo "<p class='text-center'>Aun no se ha compartido ninguna nota contigo<p/>"; ?>
    <?php foreach($notasCompartidas as $nota): ?>
      <div class="itemtit2 row box">
        <span class="izquierda">
        <span class="apunte"><?php echo $nota->getNota_name(); ?></span>&nbsp;&nbsp;&nbsp;,
        <span class="fecha"><?php echo $nota->getFecha(); ?></span>
        </span>
        <span class="derecha">
          <a title = "Editar" href="editarNota.php?nota=<?php echo $nota->getNota_id(); ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></a>
        </span>
     </div>
    <?php endforeach; ?>

  </div>

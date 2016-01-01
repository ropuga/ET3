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
  <div class="col-sm-2"></div>
  <div class="col-sm-6">
    <form action="delNota.php" method="post">
      <p class="lead banner">Mis Notas </p>
      <hr/>
      <input class="form-control buscatit" placeholder="Filtrar" type="text" name="name"><br/>
    <?php foreach($notas as $nota): ?>
      <div class="itemtit row box">
        <span class="izquierda">
	      <span class="apunte"><?php echo $nota->getNota_name(); ?></span>&nbsp;&nbsp;&nbsp;,
        <span class="fecha"><?php echo $nota->getFecha(); ?></span>
        </span>
        <span class="derecha">
          <a href="editarNota.php?nota=<?php echo $nota->getNota_id(); ?>" class="btn btn-success">Editar</a>
          <button type="submit" class="btn btn-danger" type="submit" name="<?php echo $nota->getNota_id(); ?>">Borrar</button>
        </span>
     </div>
    <?php endforeach; ?>
    </form>

  </div>

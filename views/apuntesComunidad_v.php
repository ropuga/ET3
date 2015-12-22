<!-- Vista para mis Apuntes por Raul Villar -->

<div class="col-md-4 col-sm-12">
  <div class="banner"><h1>Apuntes de la comunidad</h1></div>
  <div>
    Filtrar
    <br>
    <form action="apuntesComunidad.php" method="post">
	<!--<select class="form-control" name="titulacion">
    <option value="nil" selected> Seleccione una titulacion </option>
	  <?php foreach($titulos as $titulo): ?>
	    <option value="<?php echo $titulo->getTit_id(); ?>"><?php echo $titulo->getTit_name(); ?></option>
	  <?php endforeach; ?>
	</select><br/>-->
	<select class="form-control" name="materia">
    <option value="nil" selected> Seleccione una materia </option>
	  <?php foreach($materias as $materia): ?>
	    <option value="<?php echo $materia->getMat_id(); ?>"><?php echo $materia->getMat_name(); ?></option>
	  <?php endforeach; ?>
	</select><br/>

	  <?php echo $anho; ?>


  </div>
  <div>
  <button class="btn btn-info btn-block" type="submit"> Filtrar </button>
  </form>
  <a class="btn btn-success btn-block" href='../controllers/subirApunte.php'> Subir un apunte </a>
  </div>
</div>
  <div class="col-sm-2"></div>
  <div class="col-sm-6">
    <form action="addtieneapunte.php" method="post">
      <p class="lead banner">Apuntes de la comunidad </p>
      <hr/>
    <?php foreach($apuntes as $apunte): ?>
      <div class="box">
        <span class="izquierda">
        <span class="apunte"><?php echo $apunte->getApunte_name(); ?></span>&nbsp;&nbsp;&nbsp;,
        <span class="fecha"><?php echo $apunte->getAnho_academico(); ?></span>
        <div class="autor"> Autor: <?php echo $apunte->nombreAutor(); ?> </div>
        </span>
        <span class="derecha">
          <a class="btn btn-success" href="../apuntes/<?php echo $apunte->getRuta(); ?>">Abrir</a>
          <?php if($logged): ?>
          <button type="submit" class="btn btn-info" type="submit" name="<?php echo $apunte->getApunte_id(); ?>">Guardar</button>
          <?php endif; ?>
        </span>
     </div>
     <br/>
     <hr/>
    <?php endforeach; ?>
    </form>
  </div>

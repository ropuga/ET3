<!-- Vista para mis Apuntes por Raul Villar -->

<div class="col-md-4 col-md-offset-4 col-sm-12  box">
  <div class="banner"><h1>MIS APUNTES</h1></div>
  <div>
    Filtrar
    <br>
	<select class="form-control" name="titulacion">
	  <?php foreach($titulos as $titulo): ?>
	    <option value="<?php echo $titulo->getTit_id(); ?>"><?php echo $titulo->getTit_name(); ?></option>
	  <?php endforeach; ?>
	</select><br/>
	<select class="form-control" name="materia">
	  <?php foreach($materias as $materia): ?>
	    <option value="<?php echo $materia->getMat_id(); ?>"><?php echo $materia->getMat_name(); ?></option>
	  <?php endforeach; ?>
	</select><br/>
	<select class="form-control" name="anho">
	  <?php foreach($anho as $ano): ?>
	    <option value="<?php echo $ano->anhoRenderComboBox(); ?>"><?php echo $ano->anhoRenderComboBox(); ?></option>
	  <?php endforeach; ?>
	</select><br/>

  </div>
  <div>

  <a class="btn bt-default" href='../controllers/subirApunte.php'> Subir Apuntes </a>

  </div>
  <div class="box">
    <?php foreach($apuntes as $apunte): ?>
	uno <?php echo $apunte->getApunte_name(); ?>
    <?php endforeach; ?>
  </div>
</div>


<div class="col-md-4 col-md-offset-4 col-sm-12">
<form method= "POST" action="altaMateria.php">
  <div class="banner"><h1>Alta Materia</h1></div>
  <p> Cubra los siguientes campos para dar de alta una materia:</p>

  <input class="form-control" type="text" name="materia" size="40" placeholder="Materia"><br/>

  <select class="form-control" name="titulo">

    <?php foreach($titulos as $titulo): ?>
      <option value="<?php echo $titulo->getTit_id(); ?>"> <?php echo $titulo->getTit_name(); ?></option>
    <?php endforeach; ?>

  </select><br/>

  <input class="form-control" type="submit" value="Submit">
</form>
</div>

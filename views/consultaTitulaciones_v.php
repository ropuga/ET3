<!-- Vista de consultaTitulaciones por Raul Villar Ramos -->
<div class="col-md-4 col-sm-12">
  <div class="banner">
	   <h1>MODO ADMINISTRADOR</h1>
  </div>

<div>
  <form action="../controllers/consultaTitulaciones.php"  method="post">
    <div class="form-group">
      <input class="form-control" type="text" name="materianueva" placeholder="Nombre"/><br/>
      <input class="form-control btn btn-success" type="submit" value="Añadir nueva Titulacion">
    </div>
  </form>
</div>
</div>

<div class="col-sm-2"></div>
<div class="col-sm-6">
<form action="delTitulo.php" method="post">
  <p class="lead banner">Titulaciones</p>
<?php foreach($titulaciones as $titulo): ?>
  <div class="box">
    <span class="izquierda">
    <span class="apunte"><?php echo $titulo->getTit_id(); ?></span>&nbsp;.&nbsp;
    <span class="fecha"><?php echo $titulo->getTit_name(); ?></span>
    </span>
    <span class="derecha">
      <button type="submit" class="btn btn-danger" type="submit" name="<?php echo $titulo->getTit_id(); ?>">Borrar</button>
    </span>
 </div>
 <br/>
<?php endforeach; ?>
</form>

</div>

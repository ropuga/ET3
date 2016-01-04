//HECHO POR MIGUEL OSCAR

<div class="col-md-4 col-md-offset-4 col-sm-12  box">
  <div class="banner">
    <h1>Modo Administrador</h1>
  </div>

  <div>
    <form action="aqui iria altaNota"  method="post">
      <div class="form-group">
        <input class="form-control" type="text" name="materianueva" placeholder="Nombre de la nueva nota"/><br/>
        <input class="form-control btn btn-success" type="submit" value="Añadir nueva Nota">
      </div>
    </form>
  </div>
  </div>

  <div class="col-sm-2"></div>
  <div class="col-sm-6">
  <form action="delNota.php" method="post">
    <p class="lead banner">Notas</p>
    <hr/>
    <input class="form-control buscatit" placeholder="Filtrar" type="text" name="name"><br/>

  <?php foreach($notas as $titulo): ?>
    <div class="row box itemtit">
      <span class="izquierda">
      <span class="lead"><?php echo $titulo->getNota_name(); ?></span>
      </span>
      <span class="derecha">
        <button type="submit" class="btn btn-danger" type="submit" name="<?php echo $titulo->getNota_id(); ?>">Borrar</button>
      </span>
   </div>
  <?php endforeach; ?>
</form>
</div>

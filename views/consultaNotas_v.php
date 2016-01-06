<!--HECHO POR MIGUEL OSCAR-->

<div class="col-md-4 col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">Filtrar</div>
    <div class="panel-body">
    <form action="consultaNotas.php" method="post">
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
  <div>
    <br/>
    <button class="btn btn-info btn-block" type="submit"> Filtrar </button>
    <a href="nuevaNota.php" class="btn btn-success btn-block">Crear Nueva Nota</a>
    </form>
  </div>
</div>
</div>
</div>
  <div class="col-sm-8">
    <div class="panel panel-default">
      <div class="panel-heading">Notas</div>
      <div class="panel-body">
  <form action="delNota.php" method="post">
    <input class="form-control buscatit" placeholder="Filtrar" type="text" name="name"><br/>
    <hr/>

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
</div>
</div>

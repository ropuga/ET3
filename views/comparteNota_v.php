<!-- plantilla de subir apunte hecha por FVieira  -->
<div class="col-md-4 col-md-offset-4 col-sm-12">
  <p class="lead">Compartir nota</p>
  <form action="compartirNota.php?nota=<?php echo $nota; ?>" method="post">
    <div class="form-group">
      <input class="form-control" type="text" name="usuario" placeholder="nombre del usuario al que se desea compartir la nota"/><br/>
      <input class="form-control btn btn-success" type="submit" value="Compartir">
      <br/>
    </div>
  </form>
</div>
<?php echo $modal; ?>

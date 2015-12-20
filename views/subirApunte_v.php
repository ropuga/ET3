<!-- plantilla de subir apunte hecha por FVieira  -->
<div class="col-md-4 col-md-offset-4 col-sm-12  box">
  <div class="banner" >Subir apunte</div>
  <form action="../controllers/subirApunte.php" enctype="multipart/form-data" method="post">
    <div class="form-group">
      <input class="form-control" name="apunteUploaded" type="file" /><br/>
      <input class="form-control" type="text" name="name" placeholder="Nombre"/><br/>
      <?php echo $comboboxMateria; ?>
      <input class="form-control" type="submit" value="Submit">
    </div>
  </form>
</div>

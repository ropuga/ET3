<select placeholder="año academico" class="form-control" name="anho">
  <?php foreach(range(2010,2030) as $i): ?>
    <option value="<?php echo $i ?>"><?php echo $i ?></option>
  <?php endforeach; ?>
</select><br/>

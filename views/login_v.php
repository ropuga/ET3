<!-- plantilla de login hecha por FVieira tiene como variables $status -->
<div class="col-md-4 col-md-offset-4 col-sm-12  box">
  <div class="lead text-center"> Login </div>
  <form action="../controllers/login.php" id="form" method="post">
    <div class="form-group">
      <input class="form-control" type="text" name="name"><br/>
      <input class="form-control" type="password" name="pass">
      <div class"error"><?php echo $status; ?></div>
      <!-- <div class="centered btn btn-default" onclick="submit()"> Login </div> -->
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

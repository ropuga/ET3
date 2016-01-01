<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link href="../views/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../views/css/main.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../views/js/jquery.js"></script>
    <script src="../views/js/main.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../views/bootstrap/js/bootstrap.min.js"></script>
    <script src="../views/js/jquery-ui.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="logobanner col-sm-12">
          <div class="logomain container">
              <span class="logobar">
              <span class="logo">Apuntorium</span><?php echo $navbar; ?>
              </span>
          </div>
        </div>
            <!--<h1 class="logoTitle"><?php echo $title; ?></h1>-->
            <br/>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <?php echo $content; ?>
      </div>
    </div>


  </body>
</html>

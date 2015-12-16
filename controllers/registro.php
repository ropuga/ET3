<?php
  require_once '../model/driver.php';
  require_once '../model/Usuario.php';
  require_once '../views/templateEngine.php';

  $renderMain = new TemplateEngine();
  $renderRegistro = new TemplateEngine();
  $db = Driver::getInstance();

  if(isset($_POST['name'])&&isset($_POST['pass'])){
    $usuario = new Usuario($db);
    $usuario->setUser_name($_POST['name']);
    $usuario->setUser_pass($_POST['pass']);
    $usuario->setUser_email($_POST['email']);
    $usuario->save();
    header("location: home.php");
  }



  $renderMain->title = "registro";
  $renderMain->navbar = null;
  $renderMain->content = $renderRegistro->render('registro_v.php');
  echo $renderMain->renderMain();


 ?>

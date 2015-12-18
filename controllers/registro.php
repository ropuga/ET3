<?php
  // hecho por FVieira durante la reunion semanal
  require_once '../model/driver.php';
  require_once '../model/Usuario.php'; //vamos a registrar un usuario
  require_once '../views/templateEngine.php';

  $renderMain = new TemplateEngine(); //plantilla main
  $renderRegistro = new TemplateEngine(); // plantilla del registro
  $db = Driver::getInstance(); //instanciación de la clase Driver que es un cliente de la db

  if(isset($_POST['name'])&&isset($_POST['pass'])){ //ya nos hicieron un post?
    $usuario = new Usuario($db); //crear un nuevo usuario en la bd
    $usuario->setUser_name($_POST['name']);
    $usuario->setUser_pass($_POST['pass']);
    $usuario->setUser_email($_POST['email']);
    $usuario->save(); //active record
    header("location: confirmacion.php"); //correcto
  }



  $renderMain->title = "registro";
  $renderMain->navbar = null; //no existe navbar aun
  $renderMain->content = $renderRegistro->render('registro_v.php');
  echo $renderMain->renderMain(); //renderiza y muestra al user


 ?>

<!-- controlador eliminar Materia por Daniel de ALonso >
<?php

  session_start();
  require_once '../views/templateEngine.php'; // se carga la clase TemplateEngine
  require_once '../model/Titulacion_Usuario.php';
  require_once '../model/Usuario.php';
  require_once '../model/driver.php';
  require_once 'navbar.php'; //Inclusión de navbar. Omitible si no la necesita



  $titulo = (array_keys($_POST)[0]); // get the value of clicked button

  $db = Driver::getInstance();
  $usuario = new Usuario($db);
  $usuario = $usuario->findBy('user_name',$_SESSION['name']);
  $usuario = $usuario[0];
  $mat_us = new Materia_Usuario($db);
  $mat_us = $mat_us->findBy('mat_id',$titulo); // find the row to destroy
  foreach ($mat_us as $item) { //buscar la materia del usuario conectado
    if($item->getUser_id() == $usuario->getUser_id()){
      $item->destroy();
    }
  }
  header("location: misMaterias.php"); //return
?>

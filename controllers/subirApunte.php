<?php
  // Plantilla de creación de un controlador por Martín Vázquez

  //Includes iniciales
  require_once '../views/templateEngine.php'; // se carga la clase TemplateEngine
  require_once '../model/driver.php';
  require_once '../model/Apunte.php'; // se carga el driver de cancerbero

  session_start(); // se inicia el manejo de sesiones
  $db = Driver::getInstance();
  $apunte = new Apunte($db);

  //Instancias TemplateEngine, renderizan elementos
  $renderMain = new TemplateEngine();
  $renderSubirApunte = new TemplateEngine();
  $renderNavBar = new TemplateEngine(); //Omitible si la página no necesita navbar

  //FUNCIONES DEL CONTROLADOR
  //Escribimos aquí lo que hace este controlador en concreto (Comprueba el login, redirecciona...)
  $renderMain->title = "SubirApunte"; //Titulo y cabecera de la pagina
  if(isset($_FILES['apunteUploaded'])){
    $target = "../apuntes/";
    $target = $target . basename( $_FILES['apunteUploaded']['name']) ;
    $ok=1;
    if($_FILES["apunteUploaded"]["type"] == "application/pdf"){
      if(is_uploaded_file($_FILES['apunteUploaded']['tmp_name'])){
        if(move_uploaded_file($_FILES['apunteUploaded']['tmp_name'], $target))  {
          $renderMain->title =  "The file ". basename( $_FILES['apunteUploaded']['name']). " has been uploaded";
        }  else {
          $renderMain->title =  "Sorry, there was a problem uploading your file.";
        }
      }
    }else{
      $renderMain->title = "fichero invalido";
    }
  }
  //RENDERIZADO FINAL
  $renderMain->navbar = $renderNavBar->render('navbar_v.php'); //Inserción de navBar en la pagina. Omitible si no la necesita
  $renderMain->content = $renderSubirApunte->render('subirApunte_v.php'); //Inserción del contenido de la página
  echo $renderMain->renderMain(); // Dibujado de la página al completo

 ?>

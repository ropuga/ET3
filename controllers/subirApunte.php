<?php
  // Plantilla de creación de un controlador por Martín Vázquez

  //Includes iniciales
  require_once '../views/templateEngine.php'; // se carga la clase TemplateEngine
  require_once '../model/driver.php';
  require_once '../model/Apunte.php'; // se carga el driver de cancerbero
  require_once 'navbar.php';
  require_once 'materiaCB.php';

  session_start(); // se inicia el manejo de sesiones
  $db = Driver::getInstance();

  //Instancias TemplateEngine, renderizan elementos
  $renderMain = new TemplateEngine();
  $renderSubirApunte = new TemplateEngine();
  $renderNavBar = new TemplateEngine(); //Omitible si la página no necesita navbar

  //FUNCIONES DEL CONTROLADOR
  //Escribimos aquí lo que hace este controlador en concreto (Comprueba el login, redirecciona...)
  $renderMain->title = "SubirApunte"; //Titulo y cabecera de la pagina
  if(isset($_FILES['apunteUploaded'])){
    $apunte = new Apunte($db);
    $apunte->setMat_id(''); //cambiar en un futuro
    $apunte->setAnho_academico(''); //cambiar en un futuro
    $apunte->setApunte_name($_POST['name']);
    $target = "../apuntes/";
    $hashedName = md5_file($_FILES['apunteUploaded']['tmp_name']);
    $target = $target . basename( $hashedName ) ;
    $ok=1;
    if($_FILES["apunteUploaded"]["type"] == "application/pdf"){
      if(is_uploaded_file($_FILES['apunteUploaded']['tmp_name'])){
        if(move_uploaded_file($_FILES['apunteUploaded']['tmp_name'], $target))  {
          $renderMain->title =  "El apunte ". basename( $_FILES['apunteUploaded']['name']). " ha sido subido correctamente";
        }  else {
          $renderMain->title =  "Error subiendo el apunte.";
        }
      }
    }else{
      $renderMain->title = "fichero invalido";
    }
    $apunte->setFile_name($hashedName);
    $apunte->create();
  }
  //RENDERIZADO FINAL
  $renderSubirApunte->comboboxMateria = materiaRenderComboBox();
  $renderMain->navbar = renderNavBar(); //Inserción de navBar en la pagina. Omitible si no la necesita
  $renderMain->content = $renderSubirApunte->render('subirApunte_v.php'); //Inserción del contenido de la página
  echo $renderMain->renderMain(); // Dibujado de la página al completo

 ?>

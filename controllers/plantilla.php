<?php
  // Plantilla de creación de un controlador por Martín Vázquez

  //Includes iniciales
  require_once '../views/templateEngine.php'; // se carga la clase TemplateEngine
  require_once '../cancerbero/php/DBManager.php'; // se carga el driver de cancerbero

  session_start(); // se inicia el manejo de sesiones

  //Conexion a la BD
  $db = DBManager::getInstance();
  $db->connect();

  //Instancias TemplateEngine, renderizan elementos
  $renderMain = new TemplateEngine();
  $renderPlantilla = new TemplateEngine();
  $renderNavBar = new TemplateEngine(); //Omitible si la página no necesita navbar

  $renderPlantilla->status = "<br/>"; //Se usa este campo para mostrar mensajes de error o avisos, salto de línea por defecto


  //FUNCIONES DEL CONTROLADOR
  //Escribimos aquí lo que hace este controlador en concreto (Comprueba el login, redirecciona...)


  //RENDERIZADO FINAL
  $renderMain->title = "PLANTILLA"; //Titulo y cabecera de la pagina
  $renderMain->navbar = $renderNavBar->render('navbar_v.php'); //Inserción de navBar en la pagina. Omitible si no la necesita
  $renderMain->content = $renderPlantilla->render('plantilla_v.php'); //Inserción del contenido de la página



  echo $renderMain->renderMain(); // Dibujado de la página al completo

 ?>

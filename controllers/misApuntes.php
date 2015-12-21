<?php
  // controlador de mis apuntes por Raul Villar

  session_start(); // iniciar sesion

  //Includes iniciales
  require_once '../views/templateEngine.php'; // se carga la clase TemplateEngine
  require_once '../model/driver.php'; // se carga el driver de cancerbero
  require_once 'navbar.php'; //Inclusión de navbar. Omitible si no la necesita
  require_once '../model/Apunte.php';

  //Conexion a la BD
  $db = Driver::getInstance();
  $apuntes = new Apunte($db);
  $apuntes = $apuntes->all();
  //Instancias TemplateEngine, renderizan elementos
  $renderMain = new TemplateEngine();
  $renderPlantilla = new TemplateEngine();

  $renderPlantilla->apuntes = $apuntes; //Se usa este campo para mostrar mensajes de error o avisos, salto de línea por defecto


  //FUNCIONES DEL CONTROLADOR
  //Escribimos aquí lo que hace este controlador en concreto (Comprueba el login, redirecciona...)


  //RENDERIZADO FINAL
  $renderMain->title = "Mis Apuntes"; //Titulo y cabecera de la pagina
  $renderMain->navbar = renderNavBar(); //Inserción de navBar en la pagina. Omitible si no la necesita
  $renderMain->content = $renderPlantilla->render('misApuntes_v.php'); //Inserción del contenido de la página

  echo $renderMain->renderMain(); // Dibujado de la página al completo

 ?>

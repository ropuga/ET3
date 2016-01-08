<?php
  // Controlador para Home, página principal de la aplicación por Martín Vázquez

  session_start(); // se inicia el manejo de sesiones

  //Includes iniciales
  require_once '../views/templateEngine.php'; // se carga la clase TemplateEngine
  require_once '../model/driver.php'; // se carga el driver de cancerbero
  require_once 'navbar.php'; //Inclusión de navbar. Omitible si no la necesita
  require_once '../model/Apunte.php';


  //Conexion a la BD
  $db = Driver::getInstance();


  //Instancias TemplateEngine, y modelo
  $renderMain = new TemplateEngine();
  $renderHome = new TemplateEngine();
  $renderHome->logged = isset($_SESSION['name']);
  $apuntes= new Apunte($db);
  $apuntes = $apuntes->Primeros();

  $renderHome->apuntes = $apuntes;
  $renderMain->title = "Pagina Principal"; //Titulo y cabecera de la pagina
  $renderMain->navbar = renderNavBar(); //Inserción de navBar en la pagina. Omitible si no la necesita
  $renderMain->content = $renderHome->render('home_v.php'); //Inserción del contenido de la página

  echo $renderMain->renderMain(); // Dibujado de la página al completo

 ?>

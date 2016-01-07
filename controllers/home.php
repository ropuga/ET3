<?php
  // Controlador para Home, página principal de la aplicación por Martín Vázquez

  session_start(); // se inicia el manejo de sesiones

  //Includes iniciales
  require_once '../views/templateEngine.php'; // se carga la clase TemplateEngine
  require_once '../model/Driver.php'; // se carga el driver de cancerbero
  require_once 'navbar.php'; //Inclusión de navbar. Omitible si no la necesita
  require_once 'comboboxes.php';
  require_once '../model/Apunte.php';


  //Conexion a la BD
  $db = Driver::getInstance();


  //Instancias TemplateEngine, renderizan elementos
  $usuario = new Usuario($db);
  $renderPlantilla = new TemplateEngine();
  $renderPlantilla->anho = anhoRenderComboBox();
  $renderMain = new TemplateEngine();
  $renderHome = new TemplateEngine();
  $renderHome->status = "<br/>"; //Se usa este campo para mostrar mensajes de error o avisos, salto de línea por defecto
  $renderHome->admin = 0; //Se usa este campo para mostrar mensajes de error o avisos, salto de línea por defecto

  $apuntes= new Apunte($db);
  $apuntes = $apuntes->Primeros();

/*
  if($db->existUserRol($_SESSION["name"],"AdminApuntorium")){
      $renderHome->admin=1; //el usuario es administrador
  }
*/


  //FUNCIONES DEL CONTROLADOR
  //Dibujar la tabla de apuntes más recientes.
  //Dibujar botón de subir apuntes
  //Dibujar botón de Nueva Nota

  //RENDERIZADO FINAL

  $renderHome->apuntes = $apuntes;
  $renderMain->title = "INICIO"; //Titulo y cabecera de la pagina
  $renderMain->navbar = renderNavBar(); //Inserción de navBar en la pagina. Omitible si no la necesita
  $renderMain->content = $renderHome->render('home_v.php'); //Inserción del contenido de la página

  echo $renderMain->renderMain(); // Dibujado de la página al completo

 ?>

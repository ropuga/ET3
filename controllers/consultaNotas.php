<?php
  // HECHO POR MIGUEL OSCAR

  session_start(); // se inicia el manejo de sesiones

  //Includes iniciales
  require_once '../views/templateEngine.php'; // se carga la clase TemplateEngine
  require_once '../cancerbero/php/DBManager.php'; // se c;arga el driver de cancerbero
  require_once 'navbar.php'; //Inclusión de navbar. Omitible si no la necesita
  require_once '../model/driver.php'; //Inclusión de Driver de las clases de "model". Omitible si no las usamos
  require_once '../model/Nota.php'
  require_once 'comboboxes.php';

  //Instanciacion de Driver
  $db = Driver::getInstance(); //Esto permite el uso de las clases de "model" (Usuario.php, Apunte.php etc...)

  //Instancias TemplateEngine, renderizan elementos
  $renderMain = new TemplateEngine();
  $renderConsultaNota = new TemplateEngine();
  $renderConsultaNota->status = "<br/>"; //Se usa este campo para mostrar mensajes de error o avisos, salto de línea por defecto

  //FUNCIONES DEL CONTROLADOR
  $notas = new Nota($db);
  $notas = $notas->all();


  //RENDERIZADO FINAL
  $renderConsultaNota->notas = $notas;
  $renderMain->title = "Consulta Notas"; //Titulo y cabecera de la pagina
  $renderMain->navbar = renderNavBar(); //Inserción de navBar en la pagina. Omitible si no la necesita
  $renderMain->content = $renderPlantilla->render('consultaNotas_v.php'); //Inserción del contenido de la página

  echo $renderMain->renderMain(); // Dibujado de la página al completo

 ?>

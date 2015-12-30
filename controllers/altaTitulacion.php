<?php
  // HECHO POR MIGUEL OSCAR

  //Includes iniciales
  require_once '../model/driver.php'; //Inclusión de Driver de las clases de "model". Omitible si no las usamos
  require_once '../model/Titulacion.php';

  //Instanciacion de Driver
  $db = Driver::getInstance(); //Esto permite el uso de las clases de "model" (Usuario.php, Apunte.php etc...)
  $id = (array_keys($_POST)[1]);

  $titulacion = new Titulacion($db);
  $titulacion->setTit_name($_POST['name']);

  //se crea en la base de datos
  $titulacion->create();

  //RENDERIZADO FINAL
  header("location: consultaTitulaciones.php"); //return
 ?>

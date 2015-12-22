<?php
  require_once '../model/Titulacion_Usuario.php';
  require_once '../model/driver.php';

  session_start();

  $titulo = (array_keys($_POST)[0]); // get the value of clicked button

  $db = Driver::getInstance();

  $tit_us = new Titulacion_Usuario($db);
  $tit_us = $tit_us->findBy('tit_id',$titulo); // find the row to destroy
  $tit_us = $tit_us[0];
  $tit_us->destroy(); //destroy it

  header("location: mistitulaciones.php"); //return 
?>

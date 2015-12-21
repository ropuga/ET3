<?php
  require_once '../model/Titulacion_Usuario.php';
  require_once '../model/driver.php';

  session_start();
  $titulo = (array_keys($_POST)[0]);
  echo $titulo;
  $db = Driver::getInstance();
  $tit_us = new Titulacion_Usuario($db);
  $tit_us = $tit_us->findBy('tit_id',$titulo);
  $tit_us = $tit_us[0];
  $tit_us->destroy();
  header("location: mistitulaciones.php");
?>

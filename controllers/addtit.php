<?php
  require_once '../model/Titulacion_Usuario.php';
  require_once '../model/driver.php';
  require_once '../model/Usuario.php';

  session_start();
  $titulo = (array_keys($_POST)[0]);
  echo $titulo;
  $db = Driver::getInstance();
  $tit_us = new Titulacion_Usuario($db);
  $usuario = new Usuario($db);
  $usuario = $usuario->findBy('user_name',$_SESSION['name']);
  $usuario = $usuario[0];

  $tit_us->setTit_id($titulo);
  $tit_us->setUser_id($usuario->getUser_id());

  $tit_us->create();
  header("location: mistitulaciones.php");
?>

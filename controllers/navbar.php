<?php
//Controlador para navbar por Martín Vázquez
//Asigna variables que deciden el contenido del navbar
require_once '../views/templateEngine.php'; // se carga la clase TemplateEngine
require_once '../cancerbero/php/DBManager.php'; //Se carga la API de la BD de cancerbero

//Conexion a la BD

function renderNavBar(){
  $db = DBManager::getInstance();
  $db->connect();
  $navBar = new TemplateEngine();
  //Se ha hecho login?
  if(isset($_SESSION["name"])){
    //---x---x--- Si se ha hecho... ---x---x---
    $navBar->log=1; //el usuario está logeado
    //El usuario es un administrador?
    if($db->existUserRol($_SESSION["name"],"AdminApuntorium")){
        $navBar->admin=1; //el usuario es administrador
    }
    else{
      //El usuario es administrador de materia?
      if($db->existUserRol($_SESSION["name"],"AdminMateria")){
        $navBar->materia=1; //el usuario administra una materia
      }
    }
  }else{
    //---x---x--- Si NO se ha hecho... ---x---x---
    $navBar->log=0; //el usuario NO está logeado
    $navBar->admin=0; //por lo tanto no puede ser administrador
    $navBar->materia=1; //ni administrador de materia
  }


  return $navBar->render('navbar_v.php');
}
?>

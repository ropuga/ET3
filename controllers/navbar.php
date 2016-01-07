<?php
//Controlador para navbar por Martín Vázquez
//Asigna variables que deciden el contenido del navbar
require_once '../views/templateEngine.php'; // se carga la clase TemplateEngine
require_once '../cancerbero/php/DBManager.php'; //Se carga la API de la BD de cancerbero
require_once '../model/Usuario.php'; //ORM boroto
require_once '../model/Administra.php'; //ORM boroto
require_once '../model/driver.php';
require_once '../model/Notificacion.php';

function deleteNotificaciones(){
  $usuario = new Usuario($dbm);
  $usuario = $usuario->findBy('user_name',$_SESSION['name']); //CAMBIAME
  $notificaciones = new Notificacion($bdm);
  $notificaciones = $notificaciones->findBy("user_id",$usuario[0]->getUser_id());
  foreach($notificaciones as $key){
    $notificaciones->destroy();
  }
}


function renderNavBar(){
  //Conexion a la BD
  $db = DBManager::getInstance();
  $db->connect();
  $dbm = Driver::getInstance();

  $navBar = new TemplateEngine();



  //---x---x--- Por defecto ---x---x---
  $navBar->log=0; //el usuario NO está logeado
  $navBar->admin=0; //por lo tanto no puede ser administrador
  $navBar->materia=0; //ni administrador de materia
  $navBar->user_id=null; //y no hay ID de usuario



  //Se ha hecho login?
  if(isset($_SESSION["name"])){
    //---x---x--- Si se ha hecho... ---x---x---
    $navBar->log=1; //el usuario está logeado
    $usuario = new Usuario($dbm);
    $usuario = $usuario->findBy('user_name',$_SESSION['name']); //CAMBIAME
    $navBar->user_id = $usuario[0]->getUser_id();
    //El usuario es un administrador?
    if($db->existUserRol($_SESSION["name"],"AdminApuntorium")){
        $navBar->admin=1; //el usuario es administrador
    }
    else{
      //El usuario es administrador de materia?
      $administra = new Administra($dbm);
      if(($administra->findBy('user_id',$usuario[0]->getUser_id())!=null)){
        $navBar->materia=1; //el usuario administra una materia
      }
    }
    //Gestión de notificaciones
    $notificaciones = new Notificacion($dbm);
    $notificaciones = $notificaciones->findBy("user_id",$navBar->user_id);

    $navBar->nuevasNotificaciones=0;
    $navBar->nuevosApuntes=0;
    $navBar->displayNotificaciones = array();
    $displayNotificaciones = array();
    foreach($notificaciones as $key){
      $navBar->nuevasNotificaciones = $navBar->nuevasNotificaciones+1;
      $tipo = preg_split("/[\s,]+/",$key->getContenido(),null);
      if($tipo[0] == "Nuevos"){
          $navBar->nuevosApuntes = $navBar->nuevosApuntes+1;
      }else{
        if($tipo[0] == "Ahora"){
          $displayNotificaciones[$navBar->nuevasNotificaciones-$navBar->nuevosApuntes] = $key->getContenido();  //'</a>'REDIRECCIÓN PENDIENTE
        }else{
          $displayNotificaciones[$navBar->nuevasNotificaciones-$navBar->nuevosApuntes] = '<a href="misNotas.php">'.$key->getContenido().'</a>';
        }
      }
    }
    if($navBar->nuevosApuntes>0){
      $displayNotificaciones[$navBar->nuevasNotificaciones-$navBar->nuevosApuntes] = '<a href="apuntesComunidad.php">'.$navBar->nuevosApuntes.' nuevos apuntes en tus materias</a>';
    }
    $navBar->displayNotificaciones = $displayNotificaciones;
  }

  return $navBar->render('navbar_v.php');
}
?>

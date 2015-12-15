<?php
  // Controlador de login hecho por FVieira.
  require_once '../views/engine.php'; // se carga la clase TemplateEngine
  require_once '../cancerbero/php/DBManager.php'; // se carga el driver de cancerbero
  session_start(); // se inicia el manejo de sesiones
  $db = DBManager::getInstance();
  $db->connect();
  $renderMain = new TemplateEngine();
  $renderlogin = new TemplateEngine(); //instancias de TemplateEngine
  $renderlogin->status = "<br/>"; //por defecto no hay ningun error (en la plantilla login_v la variable $status valdrá <br/>)

  if(isset($_POST['name'])&&isset($_POST['pass'])){ // si ya se hizo algun post
    if($db->tryLogin($_POST['name'],$_POST['pass'])){ //comprueba los datos nombre de Usuario y contrseña
      $_SESSION["name"] = $_POST['username'];
      header("location: home.php");
    }
    $renderlogin->status = "Usuario y/o contraseña invalido";
  }
  $renderMain->title = "Login";
  $renderMain->navbar = null; //el login no tiene navbar

  $renderMain->content = $renderlogin->render('login_v.php'); //que inserte en la variable $content de la plantilla main.php el resultado de renderizar login_v.php
  echo $renderMain->renderMain(); // renderiza main y escribe la pagina

 ?>

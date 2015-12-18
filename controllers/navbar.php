<?php
require_once '../views/templateEngine.php'; // se carga la clase TemplateEngine

function renderNavBar(){
  $navBar = new TemplateEngine();
  if(isset($_SESSION["name"])){
    $navBar->log=1;
  }else{
    $navBar->log=0;
  }
  return $navBar->render('navbar_v.php');
}
?>

<?php
require_once '../views/engine.php';

function renderfileNoNavbar($file){
  $view = new Template();
  $view->navbar = null;
  $view->title = "Login";
  $view->content = $view->render($file);
  echo $view->renderMain();
  return $view;
}
function renderfile($file){
  $view = new Template();
  $view->navbar = $view->render('navbar_v.php');
  $view->title = "Login";
  $view->content = $view->render($file);
  echo $view->render('main.php');
  return $view;
}
?>

<?php
require '../views/engine.php';

$view = new Template();
$view->navbar = null;
$view->title = "Login";
$view->content = $view->render('login_v.php');
echo $view->render('main.php');
?>

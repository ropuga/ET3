<?php
  require 'render_helper.php';
  $renderMain = new Template();
  $renderMain->title = "Login";
  $renderMain->navbar = null;
  $renderlogin = new Template();
  $renderlogin->status = "usurario invalido";
  $renderMain->content = $renderlogin->render('login_v.php');
  echo $renderMain->renderMain();
 ?>

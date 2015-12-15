<?php
require_once("gestorPermisos.php");
$g = new GestorPermisos("WPAaltaSocios");
$g->gestionar();
?>

<h1>Esta es la funcionalidad de alta de socios</h1>

<a href="C_Menu.php">Volver al menú</a>


<?php
include 'Administrar.php';
?>

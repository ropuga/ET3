<?php
require_once("gestorPermisos.php");
$g = new GestorPermisos("WPAconsultaSocios");
$g->gestionar();
?>

<h1>Esta es la funcionalidad de consulta de socios</h1>

<a href="C_Menu.php">Volver al menú</a>


<?php
include 'Administrar.php';
?>

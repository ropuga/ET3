<?php
require_once("gestorPermisos.php");
$g = new GestorPermisos("WPAmodificacionApuestas");
$g->gestionar();
?>

<h1>Esta es la funcionalidad de modificación de apuestas</h1>

<a href="C_Menu.php">Volver al menú</a>


<?php
include 'Administrar.php';
?>

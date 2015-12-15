<?php
require_once("gestorPermisos.php");
$accion = $_REQUEST['accion'];

switch ($accion)
{
case 'alta':
$g = new GestorPermisos("WPAjornadasAlta");
$g->gestionar();
	?>
		<h1>Esta es la funcionalidad de alta de jornada</h1>
		<a href="C_Menu.php">Volver al menú</a>
	<?php
	include 'Administrar.php';
	break;

case 'baja':
$g = new GestorPermisos("WPAjornadasBaja");
$g->gestionar();
	?>
		<h1>Esta es la funcionalidad de baja de jornada</h1>
		<a href="C_Menu.php">Volver al menú</a>
	<?php
	include 'Administrar.php';
	break;

case 'modificar':
	$g = new GestorPermisos("WPAjornadasModificar");
	$g->gestionar();
	?>
		<h1>Esta es la funcionalidad de modificar jornada</h1>
		<a href="C_Menu.php">Volver al menú</a>
	<?php
	include 'Administrar.php';
	break;

case 'consultar':
$g = new GestorPermisos("WPAjornadasConsultar");
$g->gestionar();
	?>
		<h1>Esta es la funcionalidad de consultar jornada</h1>
		<a href="C_Menu.php">Volver al menú</a>
	<?php
	include 'Administrar.php';
	break;

default:
	break;

}// fin del switch

?>

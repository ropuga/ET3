<?php
// Controlador eliminar apunte hecho por cidleticia

//Includes iniciales

require_once '../model/driver.php';
require_once '../model/U_Tiene_A.php';
require_once 'navbar.php';

$db = Driver::getInstance();

$id = (array_keys($_POST)[0]); // get the value of clicked button

//FUNCIONES DEL CONTROLADOR
$tieneapunte = new U_Tiene_A($db);

$tieneapunte = $tieneapunte->findBy('apunte_id',$id); // find the apunte
$tieneapunte[0]->destroy(); // destroy it

header("location: misApuntes.php"); //return

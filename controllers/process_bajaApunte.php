<?php
// Controlador eliminar apunte hecho por cidleticia

//Includes iniciales

require_once '../model/driver.php';
require_once '../model/Apunte.php';
require_once 'navbar.php';

$db = Driver::getInstance();

//FUNCIONES DEL CONTROLADOR
$apunte = $apunte->findBy('apunte_id',$id);
$apunte[0]->destroy();

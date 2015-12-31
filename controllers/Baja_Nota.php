<?php
// Controlador eliminar Nota hecho por cidleticia

//Includes iniciales

require_once '../model/driver.php';
require_once '../model/Nota.php';


$db = Driver::getInstance();

//FUNCIONES DEL CONTROLADOR
$nota = $Nota->findBy('nota_id',$id);
$nota[0]->destroy();

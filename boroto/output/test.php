<?php
//ejemplo de interfaz: hallar las paginas pertenecientes a una funcionalidad
require 'Funcionalidad.php';

$driver = Driver::getInstance();

$funcionalidades = new Funcionalidad($driver);
$requiredFun = $funcionalidades->findBy('fun_name','"WPA_alta"');

$paginas = $requiredFun[0]->paginasv2();
foreach ($paginas as $pagina) {
  echo $pagina->getPag_desc();
}

?>

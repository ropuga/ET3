</BR>
</BR>
</BR>
</BR>
<?php

if($g->AccessPage($_SESSION["name"],"CER_Menu")){
  echo "<a href='../Menu/MenuPrincipal.php'>Administrar</a>";
}else{
  $man = DBManager::getInstance();
  $id = $man->getIdUser($_SESSION["name"]);
  echo "<a href='../GestionUsuarios/ModificarPass.php?id=".$id."'>Administrar</a>";
}
?>

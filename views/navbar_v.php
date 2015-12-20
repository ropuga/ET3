<div class="col-sm-12">
<a class="navbarColumn" href="home.php">Inicio</a>
<a class="navbarColumn" href="buscarApuntes">Buscar Apuntes</a>
<?php
  if($log==1){
    echo
    '<a class="navbarColumn" href="misTitulaciones.php">Mis Titulaciones</a>
    <a class="navbarColumn" href="misMaterias.php">Mis Materias</a>
    <a class="navbarColumn" href="misApuntes.php">Mis Apuntes</a>
    <a class="navbarColumn" href="misNotas.php">Mis Notas</a>
    <a class="navbarColumn" href="popup_de_notificaciones_sin_hacer.php">Notificaciones</a>
    <a class="navbarColumn" href="redirección_condicional_cancerbero_o_adminpage.php">Administrar</a>';  //función php
  }
?>
<a class="navbarColumn" href="login.php">
<?php
  if($log==1){
     echo 'Salir';
  }else{
     echo 'Registro/Login';
  }
?></a>
</div>
<hr/>

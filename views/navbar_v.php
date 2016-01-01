<span>
<a class="navbarColumn" href="home.php">Inicio</a>
<a class="navbarColumn" href="apuntesComunidad.php">Buscar Apuntes</a>
<?php
  if($log==1){
    echo
    '<a class="navbarColumn" href="mistitulaciones.php">Mis Titulaciones</a>
    <a class="navbarColumn" href="MisMaterias.php">Mis Materias</a>
    <a class="navbarColumn" href="misApuntes.php">Mis Apuntes</a>
    <a class="navbarColumn" href="misNotas.php">Mis Notas</a>
    <a class="navbarColumn" href="popup_de_notificaciones_sin_hacer.php">Notificaciones</a>

    <span class="dropdown">
      <a class=" navbarColumn dropdown-toggle" type="button" id="dropdownMenu1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Administrar
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li><a href="../cancerbero/GestionUsuarios/ModificarPass.php?id='.$user_id.'">Cambiar Contraseña</a></li>';
    if($materia==1){
      echo '<li><a href="../controllers/administrarMaterias.php">Administrar Materias</a></li>';
    }
    if($admin==1){
      echo '<li><a href="../controllers/administrarMaterias.php">Administrar Materias</a></li>'; //Para designar gente, no administrarlas en si
      echo '<li><a href="../controllers/administrarTitulaciones.php">Administrar Titulaciones</a></li>';
      echo '<li><a href="../cancerbero/GestionUsuarios/GestionUsuarios.php">Administrar Usuarios</a></li>';
    }
      echo'</ul>
    </span>';
  }
?>
<a class="navbarColumn" href="../views/salir.php">
<?php
  if($log==1){
     echo 'Salir';
  }else{
     echo 'Registro/Login';
  }
?></a>
</span>

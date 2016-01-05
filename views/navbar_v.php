<nav class="navbar navbar-default nav-custom">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php"><span class="logo">Apuntorium</a>
    </div>
  <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a class="navbarColumn" href="apuntesComunidad.php">Buscar Apuntes</a></li>
<?php
  if($log==1){
    echo
    '<li><a class="navbarColumn" href="mistitulaciones.php">Mis Titulaciones</a></li>
    <li><a class="navbarColumn" href="MisMaterias.php">Mis Materias</a></li>
    <li><a class="navbarColumn" href="misApuntes.php">Mis Apuntes</a></li>
    <li><a class="navbarColumn" href="misNotas.php">Mis Notas</a></li>
    <li><a class="navbarColumn" href="popup_de_notificaciones_sin_hacer.php">Notificaciones</a></li>

    <li class="dropdown">
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
    </li>';
  }
?>
<li><a class="navbarColumn" href="../views/salir.php">
<?php
  if($log==1){
     echo 'Salir';
  }else{
     echo 'Registro/Login';
  }
?></a></li>
</ul>
</div>
</nav>

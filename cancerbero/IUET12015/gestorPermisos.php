<?php
  /* Clase que extiende Cancerbero para gestrionar WPA*/
  include("../cancerbero.php");
  class GestorPermisos extends Cancerbero {
    public function GestorPermisos($pag){
      parent::Cancerbero($pag);
    }
    public function gestionar(){
      session_start();
      if(!parent::canAccess($_SESSION['name'])){
        header('location:error.php');
        exit();
      }
    }
    public function AccessPage($u,$p){
      return parent::canAccessPage($u,$p);
    }
  }
?>

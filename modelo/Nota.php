<?php
/* the ORM and activeRecord needs a driver. it should be named driver.php */
require 'driver.php';
/* class generated automaticaly with Boroto */
/* Felipe Vieira, 2015 */

class Nota{

 public $driver;
 private $nota_id;
 private $nota_name;
 private $fecha;
 private $contenido;
 private $user_id;

 public function Nota($driver) {
 /* BE CARE the ORM and activeRecord functionality of boroto generted classes needs an Drive Class with a function exec that executes SQL queries and returns arrayassoc or arrays of arrayassoc */
   $this->nota_id = null;
   $this->nota_name = null;
   $this->fecha = null;
   $this->contenido = null;
   $this->user_id = null;
   $this->driver = $driver;
 }

/* get an array_fetch from driver and fill the atributes of $this */
 public function fill($arrayassoc) {
  $this->setNota_id($arrayassoc['nota_id']);
  $this->setNota_name($arrayassoc['nota_name']);
  $this->setFecha($arrayassoc['fecha']);
  $this->setContenido($arrayassoc['contenido']);
  $this->setUser_id($arrayassoc['user_id']);
 }

/* Getters... */
 public function getNota_id(){
   return $this->nota_id;
 }
 public function getNota_name(){
   return $this->nota_name;
 }
 public function getFecha(){
   return $this->fecha;
 }
 public function getContenido(){
   return $this->contenido;
 }
 public function getUser_id(){
   return $this->user_id;
 }

/* Setters... */
 public function setNota_id($value){
   $this->nota_id = $value;
 }
 public function setNota_name($value){
   $this->nota_name = $value;
 }
 public function setFecha($value){
   $this->fecha = $value;
 }
 public function setContenido($value){
   $this->contenido = $value;
 }
 public function setUser_id($value){
   $this->user_id = $value;
 }

 /* check the existance of a value */
 public function checkExistence($key,$value){ 
   $query='select '.$key.'from Nota where '.$key.'='.$value;
   $result = $this->driver->exec();
   return $result->num_rows == 0;
 }

 /* return an array containing all Nota that key = value */
 public function findBy($key,$value){ 
   $arraytoret = array();
   $query='select *
     from Nota
     where '.$key.'='.$value;
   $results = $this->driver->exec($query);
   foreach($results as $result) {
     if($result){
       $newObject = new Nota($this->driver);
         $newObject->fill($result);
       array_push($arraytoret,$newObject);
     }
   }
   return $arraytoret;
}

/* returns an array of Nota containing all rows from db */
 public function all(){ 
   $arraytoret = array();
   $query='select *
     from Nota';
   $results = $this->driver->exec($query);
   foreach($results as $result) {
     if($result){
       $newObject = new Nota($this->driver);
         $newObject->fill($result);
       array_push($arraytoret,$newObject);
     }
   }
   return $arraytoret;
}

/* deletes from db */
 public function destroy(){
   $query = 'delete from Nota where
   nota_id = "'.$this->getNota_id().'"';
   $this->driver->exec($query);
 }

/* saves to db */
 public function save() {
    $this->destroy();
   $query = 'insert into Nota (nota_id,nota_name,fecha,contenido,user_id) values ("'.$this->getNota_id().'","'.$this->getNota_name().'","'.$this->getFecha().'","'.$this->getContenido().'","'.$this->getUser_id().'")';
   $this->driver->exec($query);
}

}
?>

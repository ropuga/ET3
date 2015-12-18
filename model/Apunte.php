<?php
/* the ORM and activeRecord needs a driver. it should be named driver.php */
require_once 'driver.php';
/* class generated automaticaly with Boroto */
/* Felipe Vieira, 2015 */

class Apunte{

 public $driver;
 private $apunte_id;
 private $mat_id;
 private $anho_academico;
 private $apunte_name;
 private $file_name;

 public function Apunte($driver) {
 /* BE CARE the ORM and activeRecord functionality of boroto generted classes needs an Drive Class with a function exec that executes SQL queries and returns arrayassoc or arrays of arrayassoc */
   $this->apunte_id = null;
   $this->mat_id = null;
   $this->anho_academico = null;
   $this->apunte_name = null;
   $this->file_name = null;
   $this->driver = $driver;
 }

/* get an array_fetch from driver and fill the atributes of $this */
 public function fill($arrayassoc) {
  $this->setApunte_id($arrayassoc['apunte_id']);
  $this->setMat_id($arrayassoc['mat_id']);
  $this->setAnho_academico($arrayassoc['anho_academico']);
  $this->setApunte_name($arrayassoc['apunte_name']);
  $this->setFile_name($arrayassoc['file_name']);
 }

/* Getters... */
 public function getApunte_id(){
   return $this->apunte_id;
 }
 public function getMat_id(){
   return $this->mat_id;
 }
 public function getAnho_academico(){
   return $this->anho_academico;
 }
 public function getApunte_name(){
   return $this->apunte_name;
 }
 public function getFile_name(){
   return $this->file_name;
 }

/* Setters... */
 public function setApunte_id($value){
   $this->apunte_id = $value;
 }
 public function setMat_id($value){
   $this->mat_id = $value;
 }
 public function setAnho_academico($value){
   $this->anho_academico = $value;
 }
 public function setApunte_name($value){
   $this->apunte_name = $value;
 }
 public function setFile_name($value){
   $this->file_name = $value;
 }


/* factory method, takes an array of mysqli::array_fetch and returns a array of Apunte */
 public function factory($arrayfetch){
   $arraytoret = Array();
   if($arrayfetch){
     foreach($arrayfetch as $fetch){
       $newObject = new Apunte($this->driver);
       $newObject->fill($fetch);
       array_push($arraytoret,$newObject);
     }
   }
 return $arraytoret;
 }

 /* return an array containing all Apunte that key = value */
 public function findBy($key,$value){ 
   $arraytoret = array();
   $query='select *
     from Apunte
     where '.$key.'='.$value;
   $results = $this->driver->exec($query);
   return $this->factory($results);
}

/* returns an array of Apunte containing all rows from db */
 public function all(){ 
   $arraytoret = array();
   $query='select *
     from Apunte';
   $results = $this->driver->exec($query);
   return $this->factory($results);
}

/* deletes from db */
 public function destroy(){
   $query = 'delete from Apunte where
   apunte_id = "'.$this->getApunte_id().'"';
   $this->driver->exec($query);
 }

/* saves to db */
 public function save() {
    $this->destroy();
   $query = 'insert into Apunte (apunte_id,mat_id,anho_academico,apunte_name,file_name) values ("'.$this->getApunte_id().'","'.$this->getMat_id().'","'.$this->getAnho_academico().'","'.$this->getApunte_name().'","'.$this->getFile_name().'")';
   $this->driver->exec($query);
}

}
?>
<?php
/* the ORM and activeRecord needs a driver. it should be named driver.php */
require 'driver.php';
/* class generated automaticaly with Boroto */
/* Felipe Vieira, 2015 */

class Titulacion{

 public $driver;
 private $tit_id;
 private $tit_name;

 public function Titulacion($driver) {
 /* BE CARE the ORM and activeRecord functionality of boroto generted classes needs an Drive Class with a function exec that executes SQL queries and returns arrayassoc or arrays of arrayassoc */
   $this->tit_id = null;
   $this->tit_name = null;
   $this->driver = $driver;
 }

/* get an array_fetch from driver and fill the atributes of $this */
 public function fill($arrayassoc) {
  $this->setTit_id($arrayassoc['tit_id']);
  $this->setTit_name($arrayassoc['tit_name']);
 }

/* Getters... */
 public function getTit_id(){
   return $this->tit_id;
 }
 public function getTit_name(){
   return $this->tit_name;
 }

/* Setters... */
 public function setTit_id($value){
   $this->tit_id = $value;
 }
 public function setTit_name($value){
   $this->tit_name = $value;
 }

 /* check the existance of a value */
 public function checkExistence($key,$value){ 
   $query='select '.$key.'from Titulacion where '.$key.'='.$value;
   $result = $this->driver->exec();
   return $result->num_rows == 0;
 }

 /* return an array containing all Titulacion that key = value */
 public function findBy($key,$value){ 
   $arraytoret = array();
   $query='select *
     from Titulacion
     where '.$key.'='.$value;
   $results = $this->driver->exec($query);
   foreach($results as $result) {
     if($result){
       $newObject = new Titulacion($this->driver);
         $newObject->fill($result);
       array_push($arraytoret,$newObject);
     }
   }
   return $arraytoret;
}

/* returns an array of Titulacion containing all rows from db */
 public function all(){ 
   $arraytoret = array();
   $query='select *
     from Titulacion';
   $results = $this->driver->exec($query);
   foreach($results as $result) {
     if($result){
       $newObject = new Titulacion($this->driver);
         $newObject->fill($result);
       array_push($arraytoret,$newObject);
     }
   }
   return $arraytoret;
}

/* deletes from db */
 public function destroy(){
   $query = 'delete from Titulacion where
   tit_id = "'.$this->getTit_id().'"';
   $this->driver->exec($query);
 }

/* saves to db */
 public function save() {
    $this->destroy();
   $query = 'insert into Titulacion (tit_id,tit_name) values ("'.$this->getTit_id().'","'.$this->getTit_name().'")';
   $this->driver->exec($query);
}

}
?>

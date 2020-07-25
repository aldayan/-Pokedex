<?php 
class estu{

public $id;
public $nombre;
public $EstatusId;
public $CarreraId;
public $profilePhoto;
 
private $utilities;


public function __construct() {

$this->utilities = new utilities();
}

public function  InicializeData($id,$nombre,$EstatusId,$CarreraId){

  $this->id=$id; 
  $this->nombre=$nombre;

  $this->estatus=$EstatusId;
  $this->carrera=$CarreraId;
 

}


public function set($data)
{
    foreach($data as $key => $value) $this->{$key} = $value;
}

function getEstatusName(){

     if($this->EstatusId !=0 && $this->EstatusId != null  ){
         return $this->utilities->estatus[$this->EstatusId];
     }


 
}

function getCarreraName(){
{

    if($this->CarreraId !=0 && $this->CarreraId != null  ){
        return $this->utilities->carrera[$this->CarreraId];
    }

}

}

}

?> 
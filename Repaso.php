<?php

//-----------CONCESIONARIO-----------\\

class Vehiculo{
    var $matricula;
    var $numruedas;
    var $kms;

    function __construct($matricula, $numruedas, $kms){
        $this->matricula=$matricula;
        $this->numruedas=$numruedas;
        $this->kms=$kms;
    }

    function getmatricula(){
        return $this->matricula;
    }

    function setmatricula($matricula){
        $this->matricula=$matricula;
    }

    function getnumruedas(){
        return $this->numruedas;
    }

    function setnumruedas($numruedas){
        $this->numruedas=$numruedas;
    }

    function getkms(){
        return $this->kms;
    }

    function setkms($kms){
        $this->kms=$kms;
    }
}

class Concesionario{
    var $ciudad;
    var $vehiculos;

    function __construct(){
        $this->ciudad=$ciudad;
        $this->vehiculos=$vehiculos;
    }

    function getciudad(){
        return $this->ciudad;
    }

    function setciudad($ciudad){
        $this->ciudad=$ciudad;
    }

    function getvehiculos(){
        return $this->vehiculos;
    }

    function setvehiculos($vehiculos){
        $this->vehiculos=$vehiculos;
    }
}

function altavehiculo(){
    $this->vehiculos[]=$vehiculos;
}

function bajavehiculo(){
    $enc=false;
    $pos=0;
    for($i=0; $i<count($this->vehiculos)&&($enc=false); $i++){
        if($this->vehiculos[$i]!=null){
            if($numMatricula==$this->vehiculos[$i]->getMatricula()){
                $this->vehiculos[$i]=null;
                $enc=true;
            }
        }
    }
}

function matricularVehiculo(){
    $enc=false;
    $pos=0;
    for($i=0;$i<count($this->vehiculos)&&($enc=false);$i++){
        if($this->vehiculos[$i]!=null){
            if($this->vehiculos[$i]->matricula==''){
                $this->vehiculos[$i]->setMatricula(rand);
                $pos=$i;
                $enc=true;
            }
        }
    }
    return $this->vehiculos[$pos];
}

function venderVehiculos(){
    $aux=$this->matriculaVehiculo();
    $this->bajaVehiculo($aux);
}




//-------------HERENCIA--------------\\

class Vehiculo {
    var $color;
    var $kms;
    var $cv;
    var $techoSolar;

    function __construct ($color,$kms, $cv, $techoSolar) {
        $this->color = $color;
        $this->kms = $kms;
        $this->cv = $cv;
        $this->techoSolar = $techoSolar;
    }

    function mostrar () {
        echo "Color: ".$this->color."<br>";
        echo "Kilómetros: ".$this->kms."<br>";
        echo "Cv: ".$this->cv."<br>";
        echo "Techo Solar: ".$this->techoSolar. "<br>";
    }
}


class Coche extends Vehiculo {
    var $puertas;
    
    function __construct ($color,$kms, $cv, $puertas, $techoSolar) {
        parent::__construct($color, $kms, $cv, $techoSolar);
        $this->puertas = $puertas;
    }

    function mostrar () {
        parent::mostrar();
        echo "Puertas: ".$this->puertas."<br>";
    }
}

$a= new Coche ("Verde", 4000, 110, 5, "Si");
$a->mostrar();


class Caravana extends Vehiculo{
    var $cocina;
    var $camas;
    var $remolque;

    function __construct($color,$kms, $cv, $techoSolar, $cocina, $camas, $remolque){
        parent:: __construct($color,$kms, $cv, $techoSolar);
        $this->cocina=$cocina;
        $this->camas=$camas;
        $this->remolque=$remolque;
    }
    
    function getcocina(){
        return $this->cocina;
    }

    function setcocina($cocina){
        $this->cocina=$cocina;
    }

    function getcamas(){
        return $this->camas;
    }

    function setcamas($camas){
        $this->camas=$camas;
    }

    function getremolque(){
        return $this->remolque;
    }

    function setremolque($remolque){
        $this->remolque=$remolque;
    }
    
    function mostrar(){
         parent::mostrar();
         echo "Cocina: ".$this->cocina."<br>";
         echo "Camas: ".$this->camas."<br>";
         echo "Remolque: ".$this->remolque."<br>";
    }
}

$c= new Caravana ("Verde", 4000, 110, "Si","Si", 4,"Si");
$c-> mostrar();


class Camion extends Vehiculo{
    var $pma;
    var $tara;

    function __construct($color,$kms, $cv, $techoSolar,$pma,$tara){
        parent:: __construct($color,$kms, $cv, $techoSolar);
        $this->pma=$pma;
        $this->tara=$tara;
    }

    function getpma(){
        return $this->pma;
    }

    function setpma($pma){
        $this->pma=$pma;
    }

    function gettara(){
        return $this->tara;
    }

    function settara($tara){
        $this->tara=$tara;
    }

    function mostrar(){
        parent:: mostrar();
        echo "P.M.A.: ".$this->pma."<br>";
        echo "TARA: ".$this->tara."<br>";
    }
}

$t= new Camion("Verde",4000,110,"Si",15.000,300);
$t->mostrar();

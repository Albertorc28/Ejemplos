<?php


//------Ejemplo Padre e Hjo------

class Padre{
    function mostrar(){
        echo "Yo soy tu padre",
    }
    
class Hijo extends Padre{
    function mostrar(){
        echo "soy tu hijo";
    }
}

$p=new hijo();
$p->mostrar();



//-----Ejemplo Vehiculo y Coche------

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
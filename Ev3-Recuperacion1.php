<?php

class Persona{
    var $nombre;
    var $edad;

    function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    function setNombre($nombre){
        $this->$nombre = $nombre;
    }

    function getNombre(){
        return $this->nombre;
    } 

    function setEdad($edad){
        $this->$edad = $edad;
    }

    function getEdad(){
        return $this->edad;
    }

    function mostrar(){
        echo "Nombre: ".$this->nombre."Edad :".$this->edad."años";
    }
}


class Jugador extends Persona{
    var $numPartidos;

    function __construct($nombre, $edad, $numPartidos){
        parent::__construct($nombre, $edad);
        $this->numPartidos = $numPartidos;
    }

    function setNumPartidos($numPartidos){
        $this->numPartidos=$numPartidos;
    }

    function getNumPartidos(){
        return $this->numPartidos;
    }

    function mostrar(){
        parent::mostrar();
        echo "Partidos jugados: ".$this->getNumPartidos()."partidos";
    }
}


$p1 = new Persona("Antonio", 40);
$p2 = new Persona ("Juan", 25);
$j1 = new Jugador ("Cristiano",33,800);
$j2 = new Jugador ("Benzema",29,600);
$vector = array ($p1,$p2,$j1,$j2);

for ($i=0; $i<count($vector); $i++){ 
    $vector[$i]->mostrar();
}
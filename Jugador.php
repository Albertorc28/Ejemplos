<?php

class Estadio{
    var $ciudad;
    var $capacidad;

    function __construct ($ciudad, $capacidad){
        $this->ciudad=$ciudad;
        $this->capacidad=$capacidad;
    }



    function getCiudad(){
        return $this->ciudad;
    }

    function setCiudad($ciudad){
        $this->ciudad=$ciudad;
    }

   
   
    function getCapacidad(){
        return $this->capacidad;
    }

    function setCapacidad($capacidad){
        $this->capacidad=$capacidad;
    }
}




class Jugador{
    var $nombre;
    var $anoNac;
    var $goles;

    
    function __construct ($nombre, $anoNac, $goles){
        $this->nombre=$nombre;
        $this->anoNac=$anoNac;
        $this->goles=$goles;
    }


    function getNombre () {
        return $this->nombre;
    }

    function setNombre ($nombre) {
        $this->nombre = $nombre;
    }

  

    function getAnoNac (){
        return $this->anoNac;
    }

    function setAnoNac(){
        $this->anoNac;
    }



    function getGoles (){
        return $this->goles;
    }

    function getGoles (){
        $this->goles=$goles;
    }
}




class Equipo {
    var $nombre;
    var $anoFundacion;
    var $estadios;
    var $jugadores;

    function __construct ($nombre, $anoFundacion, $estadios, $jugadores){
        $this->nombre=$nombre;
        $this->anoFundacion=$anoFundacion;
        $this->estadios=$estadios;
        $this->jugadores=$jugadores;
    }


    
    function getNombre () {
        return $this->nombre;
    }

    function setNombre ($nombre) {
        $this->nombre = $nombre;
    }



    function getAnoFundacion (){
        return $this->anoFundacion;
    }

    function setAnoFundacion($anoFundacion){
        $this->anoFundacion = $anoFundacion;
    }
    function getEstadios () {
        return $this->estadios;
    }
    function setEstadios($estadios) {
        $this->estadios = $estadios;
    }
    function getJugadores (){
        return $this->jugadores;
    }
    function setJugadores($jugadores) {
        $this->jugadores = $jugadores;
    }
}
 class Partido {
    var $fecha;
    var $estadios;
    var $equipoLocal;
    var $equipoVisitante;


    function __construct ($fecha,$estadios,$equipoLocal,$equipoVistante){
        $this->fecha=$fecha;
        $this->estadios=$estadios;
        $this->equipoLocal=$equipoLocal;
        $this->equipoVisitante=$equipoVisitante;
    }


    
    
    function getFecha () {
            return $this->fecha;
    }
        
    function setFecha ($fecha) {
        $this->fecha = $fecha;
    }
    function getEstadios () {
            return $this->estadios;
    }
        
    function setEstadios ($estadios) {
            $this->estadios = $estadios;
    }
    function getEquipoLocal () {
            return $this->equipoLocal;
}

    function setEquipoLocal ($equipoLocal) {
        $this->equipoLocal = $equipoLocal;

    }

    function getEquipoVisitante () {
        return $this->equipoVisitante;
    }
    
    function setEquipoVisitante ($equipoVisitante) {
        $this->equipoVisitante = $equipoVisitante;
    }

}

$equipoprueba= new Equipo();

$jug = new Jugador();
$jug2 = new Jugador();

$equipoprueba->addJugador(jug);
$equipoprueba->addJugador(jug2);




 
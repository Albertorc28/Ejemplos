<?php


class Perro{
    var $nombre;
    var $edad;


    function __construct ($perro){
        $this->nombre=$nombre;
        $this->edad=$edad;
    }
}



class Clinica {
    var $nombreClinica
    var $nombreDirector;
    var $animales;


    function __construct ($clinica){
        $this->nombreClinica=$nombreClinica;
        $this->nombreDirector=$nombreDirector;
        $this->animales=$animales;
    }


    function getNombreClinica(){
        return $this->NombreClinica;
    }

    function setNombreClinica($nombreClinica){
        $this->nombreClinica=$nombreClinica;
    }


    function getNombreDirector(){
        return $this->NombreDirector;
    }

    function setNombreDirector ($nombreDirector){
        $this->nombreDirector=$nombreDirector;
    }
    

    function getAnimales(){
        return $this->animales;
    }

    function setAnimales($animales){
        $this->animales=$animales;
    }



    function buscarAnimalPorNombre(){
        $nombre=0
        for($i=0;$i<count($animales);$i++){
            if(($animales[$i])==($nombre){
            }
            return $animales[$i]
        }
    }


    function buscarAnimalMasViejo(){
            
    }
}


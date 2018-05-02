<?php

require_once ("Persona.php");
require_once ("Pedido.php");

class Cliente extends Persona{
    private $pedidos;

    public function __construct($nombre,$edad){
        parent:: __construct($nombre,$edad);
        $pedidos= array();
    }

    public function getPedidos(){
        return $this->pedidos;
    }

    public function setPedidos($pedidos){
        $this->pedidos = $pedidos;
    }

    public function altaPedido ($pedido){
        $this->pedidos[] = $pedido;
    }

    public function getImporteTotal () {
        $suma = 0;
        for ($i=0; $i < count ($this->pedidos); $i++) { 
            $suma = $suma + $this->pedidos[$i]->getImporte();
        }
        return $suma;
    }
}
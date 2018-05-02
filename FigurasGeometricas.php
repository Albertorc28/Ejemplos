<?php

class Figura{
    var $lado;

    function __construct($lado){
        $this->lado=$lado;
    }
}

class Triangulo extends Figura{
    var $altura;

    function __construct($lado,$altura){
        $this->lado=$lado;
        $this->altura=$altura;
    }

    function calcular(){
        echo "Area del Triangulo: ";
        echo (($this->lado * $this->altura)/2);
        echo "<br>";
    }
}

class Cuadrado extends Figura{
    function calcular(){
        echo "Area del Cuadrado: ";
        echo ($this->lado * $this->lado);
        echo "<br>";
    }
}

class Rectangulo extends Figura{
    var $altura;

    function __construct($lado,$altura){
        $this->lado=$lado;
        $this->altura=$altura;
    }

    function calcular(){
        echo "Area del Rectangulo: ";
        echo($this->lado * $this->altura);
        echo "<br>";
    }
}

/*
$a= new Triangulo(10,5);
$b= new Cuadrado (10);
$c= new Rectangulo (15, 10);
$a->calcular();
$b->calcular();
$c->calcular();
*/

$vector[]=$a;
for($i=0;$i<30;$i++){
    $a=new Triangulo ($i%3,$i+1);
    $vector[]=$a;
}

for($i=0;$i<30;$i++){
    $a=new Cuadrado ($i%3);
    $vector[]=$a;
}

for($i=0;$i<30;$i++){
    $a=new Rectangulo ($i%3,$i+1);
    $vector[]=$a;
}

for($i=0;$i<count($vector);$i++){
    $vector[$i]->calcular();
}


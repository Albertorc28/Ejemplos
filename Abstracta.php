<?php

$vector= array(2,1,3,4,1);


for($i=0;$i<count($vector);$ii++){
    $suma=$suma+$vector[$i];
}
echo "La suma con for es ".$suma;


/*function suma ($v) {
    if (count($v) > 1) {
        return $v[0] + suma(array_shift($v));
    } else {
        return $v[0];
    }
}
echo "La suma con Recursividad es ".suma($vector);*/

function suma ($v) {
    if (count($v) > 1) {
        return $v[0] + suma(array_slice($v,1));
    } else {
        return $v[0];
    }
}
echo "La suma con Recursividad es ".suma($vector);







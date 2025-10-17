<?php

function cifras ($int) {
    $resul = "";
    $n = 0;
    $num = $int;
    for ($i=strlen((string)$int); $i>0; $i--) {
        $n = floor($num/pow(10,$i-1));
        $num -= $n*pow(10,$i-1);
        $resul[$i]= strval($n);
    }
    return $resul;
}

$int = readline("Introduce un entero: ");
print "Al revés: ".cifras($int);
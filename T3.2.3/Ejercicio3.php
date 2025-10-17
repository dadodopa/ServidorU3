<?php
function contar ($cad, $carac) {
    $c = 0;
    for ($i=0; $i<strlen($cad); $i++) {
        if ($cad[$i] == $carac) {
            $c++;
        }
    }
    print "El carac ".$carac." aparece ".$c." veces en la cad ".$cad;
}

$cad = strtolower(readline("Introduce una cad: "));
$carac  = strtolower(readline("Introduce el carac a buscar: "));

contar ($cad , $carac );
<?php

function getUsuario ($c) {
    $i = strpos($c, '@');
    return substr($c, 0, $i);
}

$resul = getUsuario(readline("Introduce tu c: "));
print "\n".$resul;
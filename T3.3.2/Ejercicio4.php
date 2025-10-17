<?php

const ACENTOS = array('Á','É','Í','Ó','Ú','á','é','í','ó','ú');
const VOCALES = array('A','E','I','O','U','a','e','i','o','u');

function generarCorreo($cadena){
    $corr = "";
    $part = explode(" ", $cadena);
    for ($i=0; $i<count($part); $i++) {
        $part[$i] = mb_substr($part[$i],0,1);
        print $part[$i];
        for ($j=0; $j<count(ACENTOS); $j++) {
            if(strcmp($part[$i],ACENTOS[$j])==0){
                $part[$i] = VOCALES[$j];
            }
        }
        $corr .= strtolower($part[$i]);
    }
    return $corr."@empresa.es";
}

$cadena = readline("Introduce tu nombre completo: ");
print("Correo: ".generarCorreo($cadena));


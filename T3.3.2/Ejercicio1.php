<?php
$ex = false;
function esPalindromo($cad)
{
    if (strlen($cad) > 0) {
        strtoupper($cad);
        trim($cad);
        if (strcmp($cad, strrev($cad)) == 0) {
            return "ES Palíndromo";
        } else {
            return "NO ES Palíndromo";
        }
    } else {
        return "CADENA VACÍA";
    }
}

while ($ex == false) {
    $cad = readline("Introduce una cad (escribe EXIT para salir): ");
    if (strcmp($cad, "EXIT") == 0) {
        $ex = true;
    } else {
        print (esPalindromo($cad));
        echo "\n";
    }
}

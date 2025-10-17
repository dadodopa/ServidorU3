<?php
function esPar($numero)
{
    if ($numero % 2 == 0) {
        return true;
    } else
        return false;
}
function esPrimo($numero)
{
    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

for ($i = 1; $i <= 10; $i++) {
    if (esPar($i) && esPrimo($i)) {
        print "El " . $i . " es par y primo\n";
    } else if (esPar($i) && !esPrimo($i)) {
        print "El " . $i . " es par y no primo\n";
    } else if (!esPar($i) && esPrimo($i)) {
        print "El " . $i . " es impar y primo\n";
    } else print "El " . $i . " es impar y no primo\n"; 
}
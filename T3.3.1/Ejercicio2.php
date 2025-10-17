<?php

function esPrimo($numero){
    for ($i=2;$i<$numero;$i++) {
        if ($numero%$i==0) {
            return false;
        }
    }
    return true;
}

print esPrimo(5);
print esPrimo(15);
print esPrimo(17);
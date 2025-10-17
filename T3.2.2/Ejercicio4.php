<?php

//diagonal 1s, resto 0s
/*
 * 0 0 0 1
 * 0 0 1 0
 * 0 1 0 0
 * 1 0 0 0
 */

$cuad = array();
$dim = 10;
//Diagonal empezando por la derecha
for ($i = 0; $i < $dim; $i++) {
    for ($j = 0; $j < $dim; $j++) {
        if ($j == ($dim - $i - 1)) {
            $cuad[$i][$j] = 1;
        } else {
            $cuad[$i][$j] = 0;
        }
    }
}

//Diagonal empezando por la izquierda
for ($i = 0; $i < $dim; $i++) {
    for ($j = 0; $j < $dim; $j++) {
        if ($j == ($dim + $i - $dim)) {
            $cuad[$i][$j] = 1;
        } else {
            $cuad[$i][$j] = 0;
        }
    }
}

echo "<pre>";
print_r($cuad);
echo "<pre>";

<?php

function sumaTodos($num1, $num2) {
    $resul=0;
    for ($i=$num1; $i<=$num2; $i++){
        $resul+=$i;
    }
    return $resul;
}

$num1 = readline("Introduce el primer número: ");
$num2 = readline("Introduce el segundo número: ");

print("Suma de los números comprendidos: ".sumaTodos($num1, $num2));
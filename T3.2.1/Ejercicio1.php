<?php

$d = array("domingo", "lunes", "martes", "miercoles", "jueves", 
    "viernes", "sabado");

echo $d[0]; 
// Resultado-> "domingo"

echo "<br>";

$d[5]= "viernes";
echo "<pre>";
print_r($d);
echo "<pre>";
// Resultado-> Reescribe la posición 5, coincide con el día que ya estaba

echo "<br>";
$d[7]= "viernes";
echo "<pre>";
print_r($d);
echo "<pre>";
// Resultado-> Añade una posición al final (viernes - sabado - viernes)
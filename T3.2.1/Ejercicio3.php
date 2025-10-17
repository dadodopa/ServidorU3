<?php

$x = array("A", "B", 1 => "C", "D", 2 => "E");
count($x);

echo "<pre>";
print_r($x);
echo "<pre>";
/* Resultado-> 3 posiciones. "A" es asignado a posicion 0, "B" y "D" no son
asignados porque las posiciones están ocupadas */
<?php

$a = array(
    'a',
    3 => 'b',
    1 => 'c',
    'd'
);

echo count($a);

//echo $a[2];
// Resultado-> La posición 2 no existe, dará error

echo $a[4];
// Resultado-> Mostrará el valor 'd', ya que la última posición anterior es la 3
<?php

const SIZE = 20;

$aRRAY = array();

for ($i=0; $i<SIZE; $i++) {
    $aRRAY[$i] = $i+1;
}

echo "<pre>";

foreach ($aRRAY as $value){
    echo "Valor: $value\n";
}

echo "<br>";

rsort($aRRAY);

for ($i=0; $i<SIZE;$i++) {
    echo "Valor: $aRRAY[$i]\n";
}

echo "<pre>";
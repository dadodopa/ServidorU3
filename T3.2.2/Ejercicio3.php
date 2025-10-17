<?php

$b = array();

$b[6] = rand(0, 9);
$numero = rand(1, 49);

for ($i = 0; $i < 6; $i++) {
    if (!in_array($numero, $b)) {
            $b[$i] = $numero;
        }
    while (in_array($numero, $b)) {
        if (!in_array($numero, $b)) {
            $b[$i] = $numero;
        } else {
            $numero = rand(1, 49);
        }
    }
}
echo "<pre>";

printf("Números: %d %d %d %d %d %d\n<br>Complementario: %d", $b[0], $b[1], $b[2], $b[3], $b[4], $b[5], $b[6]);

echo "<pre>";
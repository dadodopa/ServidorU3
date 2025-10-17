<?php

$num = readline("Introducir número entre 1 y 100: ");

if ($num>=1 && $num<=100){
    for ($i=0;$i<$num;$i++) {
        for ($j=0; $j<=$i; $j++) {
            echo "* ";
        }
        echo "\n";
    }
} else {
echo "El número tiene que estar comprendido entre 1 y 100";

}
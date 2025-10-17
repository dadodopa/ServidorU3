<?php

$fi = 10;

for ($i=0; $i<$fi; $i++) {
        $e = $fi-$i;
        for ($x=0; $x<$e; $x++){
            echo "  ";
        }
        $a = ($i*2)-1;
        for ($y=0; $y<$a; $y++) {
            echo "* ";
        }
        echo "\n";
} 

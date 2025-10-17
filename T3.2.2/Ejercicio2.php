<?php

$array = array();

for ($i=0; $i<20; $i++) {
    $array[$i] = rand(0,500);
}
echo "<pre>";
print_r($array);
echo "<pre>";
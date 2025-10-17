<?php
$prov = array();
$m = array();
$dimen = 20;
$random = rand(1, $dimen * $dimen);

for ($i = 0; $i < 10; $i++) {
    if (!in_array($random, $m)) {
        $m[$i] = $random;
    }
    while (in_array($random, $m)) {
        if (!in_array($random, $m)) {
            $m[$i] = $random;
        } else {
            $random = rand(1, $dimen * $dimen);
        }
    }
}
sort($m);
asort($m);
echo "<pre>";
print_r($m);
echo "<pre>";

for ($i = 0; $i < $dimen * $dimen; $i++) {
    $prov[$i] = ".";
    for ($j = 0; $j < 10; $j++) {
        if ($m[$j] - 1 == $i) {
            $prov[$i] = "*";
        }
    }
}
echo "<pre>";
print_r($prov);
echo "<pre>";


$tablero = array();
for ($i = 0; $i < count($prov); $i += $dimen) {
    $tablero[] = array_slice($prov, $i, $dimen);
}
echo "<pre>";
print_r($tablero);
echo "<pre>";
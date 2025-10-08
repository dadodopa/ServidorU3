<?php
$valor="Ana";
$cadena = str_replace(" ","",strtoupper($valor));
for ($i=0; $i <= mb_strlen($cadena); $i++) { 
    $caracterescadena[]=$cadena[$i];
}
for ($i=mb_strlen($cadena); $i >=0 ; $i--) { 
    # code...
}
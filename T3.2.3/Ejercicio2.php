<?php

$u = readline ("Introduce tu u: ");
if (ctype_alnum($u)) {
    print ("Nombre de u válido. El login será ".strtolower($u));
} else {
    print "El nombre de u sólo puede contener números y letras sin espacios en blanco.";
}
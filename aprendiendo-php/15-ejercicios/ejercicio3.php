<?php

/* 
Ejercicio 3:
 * Programa que compruebe si una variable esta vacia y si esta vacia 
 * rellenarla con texto en minuscula y mostrarla en mayusculas
 */

$texto = "";

if (empty($texto)){
    $texto="Hola yo soy el relleno de la variable";
    $textMayuculas = strtoupper($texto);
    
    echo "<STRONG>$textMayuculas</STRONG>";
}

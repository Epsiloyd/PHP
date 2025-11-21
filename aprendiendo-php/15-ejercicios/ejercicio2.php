<?php

/* 
Ejercicio 2:
 * Escribir un progrma con php que añada valores a un array
 * mientras que si longitud sea menor a 120 y mostrar el resultado por pantalla.
 */

$lista = array();

for($i=0;$i<120;$i++){
    array_push($lista,"Elemento - ".$i);
    
}
var_dump($lista);
<?php

/* 
Ejercicio 4:
 * Escribir ubn script en php que tenga 4 variables
 * 1-de tipo array
 * 2-de tipo string
 * 3-in 
 * 4-booleana 
 * y que imprima un mensaje segun el tipo de variable que sea 
 */

$lista = ["Hola mundo",8];
$string = "Estudiando ando";
$entero = 29;
$boleano = true;

if(is_array($lista)){
    echo "<p>Esto es un array<p>";   
}
if(is_string($string)){
    echo "<p>$string<p>";   
}
if(is_integer($entero)){
    echo "<p>$entero<p>";   
}
if(is_bool($boleano)){
    echo "<p>Si es un booleano<p>";   
}
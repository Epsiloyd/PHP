<?php

/* 
Ejercicio 3:
 * Escribir un programa que imprima por pantalla los
 * cuadrados (Numero mumtiplicado por si mismo) de los 40 primero numeros naturales.
 * PD. Utilizar bucle WHILE
 */

$n1 = 0;

while ($n1 <= 40){
    $cuadrado=$n1*$n1;
    echo "<h3>El cuadrado de $n1 es $cuadrado: </h3>";
    $n1++;
}
       
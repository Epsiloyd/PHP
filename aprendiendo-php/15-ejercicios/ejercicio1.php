<?php

/* 
Ejercicio 1:
 * Hacer un programa en php que tenga un array con 8 numeros enteros y 
 * que haga lo siguiente;
 * 1-tiene que recorrerlo y mostrarlo
 * 2-ordenarlo y mostrarlo
 * 3-mostrar su longitud
 * 4-buscar algun elemento dentro
 */

$numeros = [1,3,2,7,5,6,4,9,8];
echo "<h2>Mostrar numeros</h2>";
var_dump($numeros);
echo "<hr>";
echo"<h2>Ordenarlos y mostrarloa</h2>";
sort($numeros);
var_dump($numeros);
echo"<hr>";
echo"<h2>Contarlos</h2>";
echo count($numeros);
echo"<hr>";
echo"<h2>Buscarlo</h2>";
$buscador = array_search(8,$numeros);
var_dump($buscador);

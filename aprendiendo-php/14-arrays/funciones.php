<?php

//Funciones para arrays
$cantantes = ['2pac','Jlo','El pelon','Amaranto'];
$numeros = [1,2,5,8,3,9,];

//Ordenar un array por orden alfabetico con asort
asort($cantantes);
var_dump($cantantes);
//Con arsort lo orden en orden inverso

arsort($cantantes);
var_dump($cantantes);

//sort tamben lo ordena en orden alfabetico y numericamente

sort($numeros);
var_dump($numeros);

//Añadir elemento a un array
$cantantes[] = "Bebelin";
array_push($cantantes,"El yeah yeah");
var_dump($cantantes);

//par ael iminar el ultimo elemento de mi array se utiliza el arra_pop

array_pop($cantantes);
var_dump($cantantes);

//y para eliminar el elemento que yo quiera se utiliza el unset
unset($cantantes[1]);
var_dump($cantantes);

//Elemento alaeatorio
$indice = array_rand($cantantes);
echo$cantantes[$indice];

//Dar una vuelta
var_dump (array_reverse($numeros));

//buscar dentro de un array
$resultado =array_search('2pac', $cantantes);
var_dump($resultado);

//contar numeor de elementos
echo count($cantantes);

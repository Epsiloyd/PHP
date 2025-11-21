<?php

/* 
Variables locales:
 * Son las que se definen dentro de una funcion y n o pueden ser usadas
 fuera de la funcion,solo estan dispobles dentro, a menos que yo haga 
 un return
Varialbes Globaleas:
 * Las que se dclaran fuera de una funcion y estan disponibles dentro y fuera
 de las funciones
 */
//Variable global
$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $frase;

function holaMundo(){
    //Asi se llama uuna variable global (Usando en eeste caso: global + la funcion que deseas y cerrar con;)
    global $frase;
    echo "<h1>$frase</h1>";
    
    $year = 2025;
    echo "<h1>$year</h1>";
    return $year;
}


echo holaMundo();

//Fucnione Variables:

function buenosDias(){
    return "<h1>Hola, buenoas dias</h1>";
}

function buenasTardes(){
    return "<h1>Hey que tal ha estado la comida ?</h1>";
}

function buenasNoches(){
    return "<h1>Que ya es tarde, ve a dormir anda</h1>";
}

$horario = "buenasNoches";
echo $horario (); 
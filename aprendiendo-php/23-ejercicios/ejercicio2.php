<?php

/* 
Ejercicio 2:
 * 1. Una funcion
 * 2. la funcion debe validar un email con filter_var
 * 3.recoger una variable por get y valiarla
 * 4.mostrar el rsultado
 */

function validarEmail($email){
    $status = "No valido.";
    if(!empty($email)and filter_var($email, FILTER_VALIDATE_EMAIL)){
        $status ="Valido";
    }
    return $status;
}

if (isset($_GET['email'])){
   echo validarEmail($_GET["email"]);
} else {
    echo "Pasa por get un email";
}
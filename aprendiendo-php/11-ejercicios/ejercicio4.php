<?php

/* 
 Ejercicio 4:
 * Recojer dos numeros por la url (Para metros GET)y hacer todas las operaciones 
 * de una calculadora basica con esos dos numeros
 */

if (isset($_GET['numero1']) && isset($_GET['numero2'])){
    
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    
    echo '<h1>Calculadora</h1>';
    echo "Suma: ". ($numero1+$numero2)."<br/>";
    echo "Resta: ". ($numero1-$numero2)."<br/>";
    echo "Multiplicacion: ". ($numero1*$numero2)."<br/>";
    echo "Divicion: ". ($numero1/$numero2)."<br/>";
    
}else{
    echo "<h3>Escribe los dos nueros por la url</h3>";
}

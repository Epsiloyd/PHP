<?php

/*Ejercicio 5:
 * Hacer un progrma que muestre todos los numeros impares
 * entre dos numeros que nos lleguen por la URL($_GET)
 */

if(isset($_GET["numero1"])&& isset($_GET["numero2"])){
    $numero1 = $_GET["numero1"];
    $numero2 = $_GET["numero2"];
    
    if($numero1<$numero2){
    
    for($i = $numero1;$i <=  $numero2;$i++){
        if($i%2==0){
            echo "<h3>$i El numero es impar</h3>";
        }else{
            echo "<h4>$i El numero es par</h4>";
        }
    }
    }else{
        echo '<h1>El numero uno debe ser menor al dos</h1>';
    } 
    
    
}else{
    echo '<h4>Los parametros get no existen</h4>';
}    
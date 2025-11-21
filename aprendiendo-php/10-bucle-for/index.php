<?php

/* Bucle FOR:
 for(variable contador, condicion, actualizando el contador){
 * //Bloque de instrucciones
 * }
 */

$resultado = 0;

for($i=0; $i<=100; $i++){
    $resultado = $resultado + $i;
    echo"<p>$resultado</p>";
}
echo"<h3>El resultado es: $resultado</h3>"
?>
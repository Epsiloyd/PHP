<?php

/* 
Ejercicio 6:
 * Mostrar por pantalla una tabla con HTML con las tablas de 
 * multiplicar del 1 al 10.
 */

echo "<table border='1'></tr>";
echo"<tr>";
    for ($cabecera = 1;$cabecera <=10;$cabecera++){
        echo "<td>Tabla del: $cabecera</td>";
    }
echo '</tr>';
echo '<tr>';
    for($n =1;$n<=10;$n++){
        echo '<td>';
        for($x =1;$x<=10;$x++){
            echo"$n x $x =  ".($n*$x)."</br>";
        }
        echo '</td>';
    }
echo '</tr>';

echo"</table>";
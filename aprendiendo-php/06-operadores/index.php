<?php

/*operadores aritmeticos
 */
$numero_1 = 29;
$numero_2 = 21;

echo 'Suma: '.($numero_1+$numero_2).'<br>';
echo 'Resta: '.($numero_1-$numero_2).'<br>';
echo 'Multiplicacion: '.($numero_1*$numero_2).'<br>';
echo 'Divicion: '.($numero_1/$numero_2).'<br>';
echo 'Resto: '.($numero_1%$numero_2).'<br>';

//Operadores de incremento y decremento
$year = 2025;
//incremento 
//$year = $year + 1;
$year++;
//decremento
//$year = $year - 1;
$year--;
//pre-incremento
//$year= 1 + $year;
++$year;
//pre-decremento
//$year= 1 - $year;
--$year;
echo '<h1>'.$year.'</h1>';

//Operadores de asignacion

$edad = 55;

echo $edad.'<br>';

// $edad = $edad + 5;
echo ($edad+=5).'<br>';
echo ($edad-=5).'<br>';
echo ($edad*=5).'<br>';
echo ($edad/=5).'<br>';
//var_dump($edad);




?>


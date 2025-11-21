<?php

/* 
 * Bucle WHILE:
 * Esctructura de control que reitera o repide la ejecicion de una serie de instrucciones
 * tantas veces como sea necesario en base a una condicion.
 * 
 * ESTRUCTURA:
 * while(condicion){
 *      Bloque de instrucciones 
 *      mas instrucciones
 * }
 */

$numero = 0;

while($numero <= 100){
    echo $numero;
    if ($numero!=100){
        echo ", ";
    }
    $numero++;
}
echo '<hr>';


if(isset($_GET['numero'])){
    //Asi puedes cambiar el tipo de dato con el ejemplo (int) de entero
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}
var_dump($numero);

echo "<h1>Tabla de multiplicar del numero $numero</1h>";
$contador =0;

while($contador <= 10){
    echo "$numero x $contador = ".($numero*$contador)."<br>";
    $contador++;
}

echo '<hr>';
/*DO WHILE
do{
 * //Bloque de instrucciones
 * }while(condiciones);
  *  */

$edad = 17;
$contador = 1;
do{
    echo "Tienes acceso al servidor $contador <br/>";
    $contador++;
}while($edad>=18 && $contador <=10);

?>

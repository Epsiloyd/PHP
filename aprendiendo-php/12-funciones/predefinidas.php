<?php

//debuggerar y ver el resultado de una variable o cualuqer dato
$nombre = "Felipe Torres";

var_dump($nombre);
//fechas
echo date("d-m-y");
echo"<hr>";
echo time();
echo"<hr>";
echo"<hr>";
//Matematicas
echo "Raiz cuadrade de 10: ".sqrt(10);
echo"<hr>";
echo "Numero aleatorio entre 10 y 40: ".rand(10,40);
echo"<hr>";
echo "Numro pi".pi();
echo"<hr>";
echo"Redondear: ".round(7.891234,2);
echo"<hr>";
//Mas funciones generales
echo gettype($nombre);
echo"<hr>";
if (is_string($nombre)){//is_y lo que necesites buscar te ayuda a detectar los timpos
    echo "Esa variable es un string";
}
echo"<hr>";
if(!is_float($nombre)){
    echo"La variable nombre no es un numero con decimales";
}
echo"<hr>";
if (isset($edad)){//Corrobora que exista la variable
    echo 'La variable existe';
}else{
    echo"La variable no existe";
}
echo"<hr>";
$frase="   mi contenido   ";//con trim eliminamos los espacios
var_dump(trim($frase));
echo"<hr>";
//con unset eliminamos variables / indices 
$year = 2025;
unset($year);
echo"<hr>";
//con empty comprobar variable vacia con empy
$texto="";
if(empty($texto)){
    echo 'La variable texto esta vacia';
}else{
    echo 'La variable texto no esta vacia';
}
echo"<hr>";
//con strlen contar caracteres de un string
$cadena = "12345";
echo strlen($cadena);
echo"<hr>";
//con strpos encontrar caracter 
$frase = "La vida es bella";
echo strpos($frase,"vida");
echo"<hr>";
//Remplazar palabras d eun string
$frase = str_replace("vida","moto", $frase);
echo $frase;
echo"<hr>";
//Converti de mayusculas a munisculas
echo strtolower($frase);
echo"<hr>";
echo strtoupper($frase);
<?php

/*
 *  Condicionales:
 * //IF:espera a que una de las condiciones o una se cumplan para proceder
 * if(condicion){
 *   isntrucciones
 * }else{
 *   otras instrucciones
 * }
 * 
 * //OPERADORES DE COMPARACION:
 * ==  IGUAL A
 * === IDENTICO A  
 * != DISTINO A
 * <> DIFERENTE
 * !== NO IDENTICO
 * < MENOR QUE 
 * > MAYOR QUE
 * <= MENOR O IGUAL QUE
 * >= MAYOR O IGUAL QUE
 * 
 * 
 * ///Operadores logicos
 * && AND  = Y
 * || OR = O
 * ! NOT NO
 * and,or
 */

$color = 'rojo';

if($color == 'rojo'){
    echo "El color es rojo";
} else {
    echo "Color erroneo";
}

echo '<br>';

$year = 2025;
if($year == 2025){
    echo "Estamos en 2025";
}else{
    echo "No estamos en 2025";
}

echo '<br>';

$year = 2024;
if($year < 2025){
    echo "Es un año anterior a 2025";
}else{
    echo "Es un año posterior a 2025";
}

echo '<br>';

$year = 2024;
if($year != 2025){
    echo "Es un año diferente a 2025";
}else{
    echo "Estamos a 2025";
}
$nombre = "Angel Iniesta";
$ciudad = "Guadalajara";
$continente = "Europeo";
$edad = 18;
$mayoria_de_edad = 18;

if ($edad >= $mayoria_de_edad){
    echo "<h1>$nombre es mayor de edad</h1>";
    if ($continente == "Americano"){
        echo "<h2> y es de $ciudad</h2>";
    }else{
        echo "No es Americano";
        
    }
}else{
    echo "<h1>$nombre Sigue siendo un menor</h1>";
}
echo'<hr>';

$dia = 7;

if($dia ==1){
    echo "Es lunes";
}else{
    if($dia ==2){
        echo"El dia es martes";
    }else{
        if($dia ==3){
            echo"El dia es miercoles";
        }else{
            if($dia ==4){
                echo"El dia es jueves";
            }else{
                if($dia==5){
                   echo"El dia es viernes";
                }else{
                    echo 'Es fin de semana';
                }
            }
        }
    }
}

echo"<hr>";

$dia2 = 6;
if($dia2 ==1){
    echo "LUNES";
}elseif ($dia2 ==2) {
    echo "MARTES";
}elseif ($dia2==3) {
    echo"MIERCOLES";
}elseif ($dia2==4){
    echo"JUEVES";
}elseif ($dia2 ==5){
    echo"VIERNES";
}else{
    echo"Es fin de semana";
}

echo"<hr>";

$edad1 = 18;
$edad2 = 64;
$edad_oficial = 70;

if($edad_oficial >= $edad1 and $edad_oficial <= $edad2){
    echo "Esta en edad de trabajar";
} else {
    echo"No esta en edad de trabajar";
}
echo"<hr>";

$pais="Argentina";

if($pais=="Mexico" or $pais=="Colombia" or $pais=="Argentina"){
    echo 'En este pais el idioma oficial es el español';
}else{
    echo"En este pais no se habla español";
}
echo '<hr>';
//SWITCH

$dia =4;

switch ($dia){
    case 1:
        echo 'LUNES';
        break;
    case 2:
        echo 'MARTES';
        break;
    case 3:
        echo 'MIERCOLES';
        break;
    case 4:
        echo 'JUEVES';
        break;
    case 5:
        echo 'VIERNES';
        break;
    default:
        echo 'Es fin de semana';
}
echo '<hr>';

//Con GOTO puedes saltar hasta la instrccion marcada en goto
goto marca;
echo '<h3>Intruccion 1</h3>';
echo '<h3>Intruccion 2</h3>';
echo '<h3>Intruccion 3</h3>';
echo '<h3>Intruccion 4</h3>';

marca:
echo 'Me he saltado 4 echos';
?>
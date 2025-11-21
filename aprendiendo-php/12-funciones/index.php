<?php

/* 
Funciones: 
 Es un conjunto de intrucciones agrupadas bajo un nombre concreto
 y que pueden reutilizarse solamente invocando a la funcion tantas veces
 como queramos.

 funtion nombre_de_mi_funcion(Parametros){
 * //Bloque o conjunto de instrucciones
 * }

 // para llamarla solo se necesita sl nombre de la funcion
 * nombre_de_mi_funcion($mi_parametro);
 */

function muestraNombres(){
    echo"Felipe Torres </br>";
    echo "Fernanda Amezquita</br>";
    echo "Abraham Esparza</br>";
    echo "Carmen Leticia<hr>";
}
/*
muestraNombres();
muestraNombres();
muestraNombres();
muestraNombres();
*/

//EJEMPLO 2:

function tabla($numero){
    echo "<h3>Tabla de multiplicar del numero: $numero</h3>";
    for($i =1;$i<=10;$i++){
        $operacion=$numero*$i;
        echo "$numero x $i = $operacion </br>";
    }
//var_dump($numero);
}

//tabla(29);
/*
//Inclusive pordemos hacer que el numero sea tomado por la URL con $_GET
if(isset($_GET["numero"])){
    tabla($_GET['numero']);
}else{
    echo "No hay numero para multiplicar";
}
*/

for($i=0;$i<=10;$i++){
    tabla($i);
}
echo "<hr>";
//Tercer ejemplo:

function calculadora($numero1, $numero2, $negrita = false){
    //Conjunto de intrucciones
    $suma = $numero1+$numero2;
    $resta = $numero1-$numero2;        
    $multiplicacion = $numero1*$numero2;        
    $divicion = $numero1/$numero2;
    
    if($negrita){
        echo "<h1>";
    }
    
    echo "Suma: $suma </br>";
    echo "Resta: $resta </br>";
    echo "Divicion: $divicion </br>";
    echo "Multiplicacion: $multiplicacion </br>";
    
    if($negrita){
        echo "<h1/>";
    }
    echo "<hr/>";
    
    
}

calculadora(29,21);
calculadora(5,21);
calculadora(29,5);
calculadora(8,9);

echo "<hr>";
function devuelveElNombre($nombre){
    return "El nombre es: $nombre";
}

echo devuelveElNombre("Felipe <hr>");

function calculadora1($numero1, $numero2, $negrita = false){
    //Conjunto de intrucciones
    $suma = $numero1+$numero2;
    $resta = $numero1-$numero2;        
    $multiplicacion = $numero1*$numero2;        
    $divicion = $numero1/$numero2;
    $cadena_texto = "";
    
    if($negrita){
        $cadena_texto.="<h1>";
        
    }
    
    $cadena_texto.= "Suma: $suma </br>";
    $cadena_texto.= "Resta: $resta </br>";
    $cadena_texto.= "Divicion: $divicion </br>";
    $cadena_texto.= "Multiplicacion: $multiplicacion </br>";
    
    if($negrita){
        $cadena_texto.="</h1>";
        
    }
    $cadena_texto.= "<hr/>";
    //var_dump($cadena_texto);
    
    return $cadena_texto;
}

echo calculadora1(29,21);
calculadora1(5,21);
calculadora1(29,5);
calculadora1(8,9);


//ejemplo 4:
echo "<hr>";
function getNombre($nombre){
    $texto= "El nombre es: $nombre";
    return $texto;
}
function getApellidos($apellidos){
    $texto= "Los apellidos son: $apellidos";
    return $texto;
}

function devuelveElNombre1($nombre, $apellidos){
    $texto= getNombre($nombre)
            ."<br/>".
             getApellidos($apellidos);
                    
    return  $texto;
}

echo devuelveElNombre1('Felipe','Torres Tavera');









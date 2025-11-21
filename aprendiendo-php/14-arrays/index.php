<?php

/* 
ARRAYS:
UN ARRAY ES UNA COLECCION O UN CONJUNTO DE DATOS / VALORES/ BAJO UN 
 * UNICO NOMBRE Y PARA CCEDER AESOS VALORE SPODEMOS USAR UN INDICE 
 * NUMERICO O ALFA NUNERICO
 */

$pelicula = "Batman";
$Peliculas = array('Batman','Spiderman','El señor de los anillos');
$cantantes = ['2pac','JLO','EL PELON'];
//Array asociativo
$personas = ['Nombre' =>'Felipe',
    'Apellidos'=>'Torres Tavera',
    'Web'=>'El mas perron.com'];
echo $personas['Apellidos'];
echo "<hr>";
/*
echo $Peliculas[2];
echo '<br>';
echo $cantantes[2];
*/
//Recorrer con for
echo'<h1>Listado de peliculas</h1>';

echo "<ul>";

for($i = 0; $i < count($Peliculas); $i++){
    echo "<li>".$Peliculas[$i]."</li>";
}
echo"</ul>";
echo "<hr>";
//Recorrer con Foreach
echo'<h1>Listado de Cantantes</h1>';
echo "<ul>";
foreach ($cantantes as $cantante) {
    
    echo "<li>".$cantante."</li>";
    
}
echo "</ul>";

//Arrays multidimencionales

$contactos = [
    ['nombre'=>'Antonio','email' => 'si.@.com'],
    ['nombre'=>'Salvador','email' =>'b@.com'],
    ['nombre'=>'juan','email'=>'j@.com']];

    var_dump($contactos);
    echo $contactos[2]['email'];
    
    foreach ($contactos as $contacto) {
        var_dump($contacto['nombre']);
    
}



<?php

//Constantes
//Es un contenedor de informacion que no puede variar
/*
 * Para definir una constante no se utiliza el signo de $ a diferencia de 
 * las variables para poder ser llamada, solo escribes el dato que 
 * necesitas y listo
 */

define('Nombre','Felipe Torres');
define('Pareja', 'Maria Fernanda');

echo Nombre;
echo '<h3>'.Pareja.'</h3>';

//Cosntantes pre-definidas ejemplos

echo PHP_OS.'<br>';
echo PHP_VERSION.'<br>';
echo PHP_EXTENSION_DIR.'<br>';
echo __LINE__.'<br>';
echo __FILE__.'<br>';
function holaMundo(){
    echo __FUNCTION__.'<br>';
}
holaMundo();

?>
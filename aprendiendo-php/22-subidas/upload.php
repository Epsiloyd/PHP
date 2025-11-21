<?php

$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == "image/jpg" or $tipo=="image/jpeg" or $tipo=="image/png" or $tipo=="image/gif"){
    ///Aqui se crea un directorio en caso de que no existiera
    if(!is_dir('images')){
        mkdir('images',0777);
    }
    ///Aqui se mueve los archivos a dicha carpeta con su respectivo nombre
    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
    
    header("Refresh:3; URL=index.php");
    echo"<h1>Imagen subida correctamente</h1>";
    
}else {
    ///Con el header refresh hace que la pagina se refresque eh inclusive reedireccionar a una pagina en especifico
    header("Refresh:3; URL=index.php");
    echo "<h1>Sube una imagen con un formato correcto por favor...</h1>";
}
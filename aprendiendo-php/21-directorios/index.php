<?php
//crear carpeta con mkdir
if(!is_dir("mi_carpeta")){
mkdir("mi_carpeta",0777) or die("No se puede crear la carpeta");
}else{
    echo "Ya existe la carpeta";
}

//borrar carpeta con rmdir
//rmdir("mi_carpeta");
echo "<hr> <h2>Contenido de mi carpeta</h2>";
if ($gestor = opendir("./mi_carpeta")){
    while (false !== ($archivo = readdir($gestor))){
        if($archivo !== "." && $archivo !== ".."){
            echo $archivo."</br>";
        }    
    }
}
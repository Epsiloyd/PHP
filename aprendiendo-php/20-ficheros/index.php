<?php
/*
//Para exportar un archivo se utiliza el comando fopen y en este caso se le menciona el archivo y
//el metodo que queramos que se ejecute en este caso r (read) modo lectura o usar a+ para tner acceso a escritura y lectura
//en los archivos 
$archivo = fopen("fichero_texto.txt", "a+");
//*Leer el contenido se realiza con fget
while(!feof($archivo)){
//*Con !feof hace que se recorra todo el archivo 
$contenido = fgets($archivo);
echo $contenido."</br>";
}
//Con fwrite se úede escribir desde un archivo 
fwrite($archivo, "***Soy un texto escrito desde php***");
//Y con fclose se cierra dicho archivo
fclose($archivo); 
*/

// Con copy podemos copíar el archivo

//copy("fichero_texto.txt", "fichero_copiado.txt") or die ("Error al copiar");

//Renombrar un fichero
//rename("fichero_copiado.txt", "nuevo_archivo");

//Eliminar
//unlink("nuevo_archivo")or die("Error al borrar");
//Nota el or die es por si el programa falla mostrar un mensaje 


//Comprobar si un archivo existe o no 

if(file_exists("fichero_texto.txt")){
    echo "El archivo existe";
} else {
    echo "El archivo no existe";
}